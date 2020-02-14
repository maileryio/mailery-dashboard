<?php

declare(strict_types=1);

/**
 * Dashboard module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-dashboard
 * @package   Mailery\Dashboard
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

namespace Mailery\Dashboard\Provider;

use Mailery\Dashboard\Controller\DefaultController;
use Mailery\Web\Provider\RoutesProviderInterface;
use Psr\Container\ContainerInterface;
use Yiisoft\Router\Route;
use Yiisoft\Yii\Web\Middleware\ActionCaller;

class RoutesProvider implements RoutesProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getRoutes(ContainerInterface $container): array
    {
        return [
            Route::get('/', new ActionCaller(DefaultController::class, 'index', $container))
                ->name('/'),
        ];
    }
}
