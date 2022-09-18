<?php
declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */
namespace Bramus\Router;

interface RouterInterface
{
	/**
	 * Store a route and a handling function to be executed when accessed using one of the specified methods.
	 *
	 * @param string|Route $methods Allowed methods, | delimited
	 * @param string $pattern A route pattern such as /about/system
	 * @param object|callable $fn The handling function to be executed
	 */
	public function match($methods, $pattern, $fn);
}
