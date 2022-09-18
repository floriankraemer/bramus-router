<?php
declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */
namespace Bramus\Router;

/**
 * Route Factory Interface.
 */
interface RouteFactoryInterface
{
	public function route(string|array $methods, string $pattern, mixed $handler): RouteInterface;

	public function all(string $pattern, mixed $handler): RouteInterface;

	public function post(string $pattern, mixed $handler): RouteInterface;

	public function patch(string $pattern, mixed $handler): RouteInterface;

	public function get(string $pattern, mixed $handler): RouteInterface;

	public function put(string $pattern, mixed $handler): RouteInterface;
}
