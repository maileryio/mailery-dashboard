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

use Mailery\Dashboard\Controller;
use Psr\Http\Message\ResponseInterface as Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('index');
    }
}
