<?php

declare(strict_types=1);

use App\Mcp\Servers\PostaStudioServer;
use Illuminate\Support\Facades\Route;
use Laravel\Mcp\Facades\Mcp;

Route::middleware('throttle:mcp-oauth-registration')->group(function () {
    Mcp::oauthRoutes();
});

Mcp::web('/mcp/postastudio', PostaStudioServer::class)
    ->middleware(['auth:api', 'workspace.token:mcp'])
    ->name('mcp.postastudio');
