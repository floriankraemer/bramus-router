<?php

declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */

namespace Bramus\Router;

/**
 * Result Interface.
 */
interface ResultInterface
{
    /**
     * Returns true if the route matched.
     *
     * @retrun bool
     */
    public function matched(): bool;

    /**
     * Get the matched route or null if none was matching
     *
     * @return \Bramus\Router\RouteInterface|null
     */
    public function getRoute(): ?RouteInterface;
}
