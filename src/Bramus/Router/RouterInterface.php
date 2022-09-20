<?php

declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */

namespace Bramus\Router;

/**
 *
 */
interface RouterInterface
{
    public function addRoute(RouteInterface $route);
}
