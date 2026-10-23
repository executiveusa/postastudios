#!/bin/sh
# Self-hosted queue runner.
#
# Why not Horizon: Horizon creates one process pool per queue NAME and always
# keeps at least one worker per pool. PostaStudios dispatches to 19 queues
# (5 core + 14 social platforms), so Horizon can never run fewer than 19
# workers (~60MB each), which OOM-kills small self-hosted containers.
#
# A plain Laravel queue:work process accepts a comma-separated queue list in
# ONE process (queues are checked in the listed priority order), so a fixed
# small worker count can cover every queue. supervisord starts
# HORIZON_MAX_PROCESSES (default 2) copies of this script.
set -e

# Derived from the Platform enum at container start so it can never drift
# from the queues the app actually dispatches to. Pure autoload, no
# framework boot, so this is fast and needs no DB/redis.
QUEUES=$(php -r 'require "/var/www/html/vendor/autoload.php"; echo implode(",", array_merge(["default","posthog","broadcasts","ai","automations"], \App\Enums\SocialAccount\Platform::allQueues()));')

exec php /var/www/html/artisan queue:work redis \
    --queue="$QUEUES" \
    --sleep=3 \
    --tries=1 \
    --timeout=930 \
    --backoff=0 \
    --memory=256 \
    --max-jobs=1000 \
    --max-time=3600
