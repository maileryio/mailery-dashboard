<?php

namespace Mailery\Dashboard\Provider;

use Psr\Container\ContainerInterface;
use Yiisoft\Di\Support\ServiceProvider;
use Yiisoft\Router\RouteCollectorInterface;
use Yiisoft\Router\Route;
use Mailery\Dashboard\Controller\DefaultController;

final class RouteCollectorServiceProvider extends ServiceProvider
{
    public function register(ContainerInterface $container): void
    {
        /** @var RouteCollectorInterface $collector */
        $collector = $container->get(RouteCollectorInterface::class);

        $collector->addRoute(
            Route::get('/brand/{brandId:\d+}', [DefaultController::class, 'index'])
                ->name('/dashboard/default/index')
        );
    }
}
