#!/bin/sh
set -eu

if [ -z "${APP_KEY:-}" ]; then
  APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
  export APP_KEY
  echo "APP_KEY was not configured; generated an ephemeral runtime key." >&2
fi

exec frankenphp run --config /etc/frankenphp/Caddyfile
