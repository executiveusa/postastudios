<?php

declare(strict_types=1);

use App\Mcp\Servers\PostaStudiosServer;
use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Facades\Mcp;

Route::middleware('throttle:mcp-oauth-registration')->group(function () {
    Mcp::oauthRoutes();
});

Mcp::web('/mcp/postastudios', PostaStudiosServer::class)
    ->middleware(['auth:api', 'workspace.token:mcp'])
    ->name('mcp.postastudios');
