<?php

declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */

namespace Bramus\Router;

/**
 * Class Result.
 */
class Result implements ResultInterface
{
    public function __construct(
        protected bool $matched,
        protected ?RouteInterface $route
    ) {}

    /**
     * @inheritDoc
     */
    public function matched(): bool
    {
        return $this->matched;
    }

    /**
     * @inheritDoc
     */
    public function getRoute(): ?RouteInterface
    {
        return $this->route;
    }
}
