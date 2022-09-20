<?php

declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */

namespace Bramus\Router;

/**
 * Class Route.
 */
class Route implements RouteInterface
{
    public function __construct(
        protected array|string $methods,
        protected string $pattern,
        protected mixed $handler,
        protected array $attributes = []
    )
    {
    }

    public function getAttribute(string $name): mixed
    {
        return isset($this->attributes) ? $this->attributes[$name] : null;
    }

    public function getHandler(): mixed
    {
        return $this->handler;
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }

    public function getMethods(): array
    {
        if (is_string($this->methods)) {
            $this->methods = explode($this->methods, '|');
        }

        return $this->methods;
    }
}
