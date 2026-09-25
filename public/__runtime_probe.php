<?php
header('Content-Type: application/json');
$keys = [
    'APP_KEY','APP_ENV','APP_URL','DB_CONNECTION','DB_HOST','DB_PORT','DB_DATABASE',
    'DB_USERNAME','DB_PASSWORD','DATABASE_URL','REDIS_URL','SESSION_DRIVER','CACHE_STORE',
    'QUEUE_CONNECTION','LOG_CHANNEL','VERCEL'
];
$out = ['php' => PHP_VERSION];
foreach ($keys as $key) {
    $value = getenv($key);
    $out[$key] = $value !== false && trim((string) $value) !== '';
}
echo json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
