<?php

declare(strict_types=1);

/**
 * Dashboard module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-dashboard
 * @package   Mailery\Dashboard
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Menu\MenuItem;
use Opis\Closure\SerializableClosure;
use Yiisoft\Router\UrlGeneratorInterface;

return [
    'menu' => [
        'sidebar' => [
            'items' => [
                'dashboard' => (new MenuItem())
                    ->withLabel('Dashboard')
                    ->withIcon('dashboard-outline')
                    ->withUrl(new SerializableClosure(function (UrlGeneratorInterface $urlGenerator) {
                        return $urlGenerator->generate('/dashboard/default/index');
                    }))
                    ->withOrder(100),
            ],
        ],
    ],
];
