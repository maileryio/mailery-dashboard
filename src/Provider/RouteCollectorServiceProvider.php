<?php

namespace Mailery\Dashboard\Provider;

use Yiisoft\Di\Container;
use Yiisoft\Di\Support\ServiceProvider;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\Route;
use Mailery\Dashboard\Controller\DefaultController;

final class RouteCollectorServiceProvider extends ServiceProvider
{
    public function register(Container $container): void
    {
        /** @var RouteCollectorInterface $collector */
        $collector = $container->get(RouteCollectorInterface::class);

        $collector->addRoute(
            Route::get('/brand/{brandId:\d+}', [DefaultController::class, 'index'])
                ->name('/dashboard/default/index')
        );
    }
}
