#!/bin/sh
set -eu

export APP_ENV="${APP_ENV:-production}"
export APP_DEBUG="${APP_DEBUG:-false}"
export LOG_CHANNEL="${LOG_CHANNEL:-stderr}"
export CACHE_STORE="${CACHE_STORE:-array}"
export SESSION_DRIVER="${SESSION_DRIVER:-cookie}"
export QUEUE_CONNECTION="${QUEUE_CONNECTION:-sync}"
export BROADCAST_CONNECTION="${BROADCAST_CONNECTION:-log}"
export SELF_HOSTED="${SELF_HOSTED:-true}"
export ALLOW_MULTIPLE_SOCIAL_ACCOUNTS="${ALLOW_MULTIPLE_SOCIAL_ACCOUNTS:-true}"

if [ -z "${APP_URL:-}" ]; then
  if [ -n "${VERCEL_PROJECT_PRODUCTION_URL:-}" ]; then
    APP_URL="https://${VERCEL_PROJECT_PRODUCTION_URL}"
  else
    APP_URL="https://postastudios.vercel.app"
  fi
  export APP_URL
fi

if [ -z "${APP_KEY:-}" ]; then
  APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
  export APP_KEY
  echo "APP_KEY is not configured in Vercel; using an ephemeral runtime key." >&2
fi

if [ -z "${DB_CONNECTION:-}" ]; then
  mkdir -p /tmp/posta
  touch /tmp/posta/database.sqlite
  export DB_CONNECTION=sqlite
  export DB_DATABASE=/tmp/posta/database.sqlite
  echo "No external database configured; using temporary SQLite for this Vercel instance." >&2
  php artisan migrate --force --no-interaction >&2
fi

exec frankenphp run --config /etc/frankenphp/Caddyfile
