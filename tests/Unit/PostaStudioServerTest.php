<?php

declare(strict_types=1);

use App\Mcp\Servers\PostaStudioServer;
use Laravel\Mcp\Server\Attributes\Icon;

it('exposes the postastudio logo as the mcp server icon', function () {
    $icons = (new ReflectionClass(PostaStudioServer::class))->getAttributes(Icon::class);

    expect($icons)->toHaveCount(1);

    $icon = $icons[0]->newInstance();

    expect($icon->src)->toBe('images/postastudio/icon.png')
        ->and($icon->mimeType)->toBe('image/png')
        ->and($icon->theme)->toBeNull();
});
