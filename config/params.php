<?php

declare(strict_types=1);

/**
 * Dashboard module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-dashboard
 * @package   Mailery\Dashboard
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Dashboard\Controller\DefaultController;
use Mailery\Menu\MenuItem;
use Opis\Closure\SerializableClosure;
use Yiisoft\Router\Route;
use Yiisoft\Router\UrlGeneratorInterface;

return [
    'router' => [
        'routes' => [
            '/dashboard/default/index' => Route::get('/brand/{brandId:\d+}', [DefaultController::class, 'index'])
                ->name('/dashboard/default/index'),
        ],
    ],

    'menu' => [
        'sidebar' => [
            'items' => [
                'dashboard' => (new MenuItem())
                    ->withLabel('Dashboard')
                    ->withIcon('dashboard')
                    ->withUrl(new SerializableClosure(function (UrlGeneratorInterface $urlGenerator) {
                        return $urlGenerator->generate('/dashboard/default/index');
                    }))
                    ->withOrder(100),
            ],
        ],
    ],
];
