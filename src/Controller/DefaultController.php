<?php

declare(strict_types=1);

/**
 * Dashboard module for Mailery Platform
 * @link      https://github.com/maileryio/mailery-dashboard
 * @package   Mailery\Dashboard
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

namespace Mailery\Dashboard\Controller;

use Mailery\Brand\Service\BrandLocatorInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Mailery\Web\ViewRenderer;

class DefaultController
{
    /**
     * @var ViewRenderer
     */
    private ViewRenderer $viewRenderer;

    /**
     * @param ViewRenderer $viewRenderer
     */
    public function __construct(ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer->withController($this);
    }

    /**
     * @return Response
     */
    public function index(BrandLocatorInterface $brandLocator): Response
    {
        $brandLocator->getBrand();

        return $this->viewRenderer->render('index');
    }
}
