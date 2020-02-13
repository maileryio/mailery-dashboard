<?php

declare(strict_types=1);

/**
 * Dashboard module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-dashboard
 * @package   Mailery\Dashboard
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

use Mailery\Menu\Sidebar\SidebarMenu;
use Psr\Container\ContainerInterface;
use Yiisoft\Router\UrlGeneratorInterface;

return [
    SidebarMenu::class => [
        'setItems()' => [
            'items' => [
                'dashboard' => [
                    'label' => function () {
                        return 'Dashboard';
                    },
                    'icon' => 'dashboard',
                    'url' => function (ContainerInterface $container) {
                        return $container->get(UrlGeneratorInterface::class)
                            ->generate('/');
                    },
                ],
            ],
        ],
    ],
];
