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

use Mailery\Web\Controller;
use Psr\Http\Message\ResponseInterface;

class DefaultController extends Controller
{
    /**
     * @return ResponseInterface
     */
    public function index(): ResponseInterface
    {
        $response = $this->getResponseFactory()->createResponse();

        $output = $this->render('index');

        $response->getBody()->write($output);

        return $response;
    }
}
