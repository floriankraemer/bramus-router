<?php
declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */
namespace Bramus\Router;

/**
 * Route Factory.
 */
class RouteFactory
{
	public function route(string|array $methods, string $pattern, mixed $handler): RouteInterface
	{
		if (is_string($methods)) {
			$methods = explode($methods, '|');
		}

		return new Route(
			methods: $methods,
			pattern: $pattern,
			handler: $handler
		);
	}

	public function all(string $pattern, mixed $handler): RouteInterface
	{
		return new Route(
			methods: [
				RouteInterface::POST_METHOD,
				RouteInterface::PUT_METHOD,
				RouteInterface::GET_METHOD,
				RouteInterface::DELETE_METHOD,
			],
			pattern: $pattern,
			handler: $handler
		);
	}

	public function post(string $pattern, mixed $handler): RouteInterface
	{
		return new Route(
			methods: [RouteInterface::POST_METHOD],
			pattern: $pattern,
			handler: $handler
		);
	}

	public function patch(string $pattern, mixed $handler): RouteInterface
	{
		return new Route(
			methods: [RouteInterface::PATCH_METHOD],
			pattern: $pattern,
			handler: $handler
		);
	}

	public function get(string $pattern, mixed $handler): RouteInterface
	{
		return new Route(
			methods: [RouteInterface::DELETE_METHOD],
			pattern: $pattern,
			handler: $handler
		);
	}

	public function put(string $pattern, mixed $handler): RouteInterface
	{
		return new Route(
			methods: [RouteInterface::PUT_METHOD],
			pattern: $pattern,
			handler: $handler
		);
	}
}
