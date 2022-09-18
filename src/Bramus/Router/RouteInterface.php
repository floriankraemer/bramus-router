<?php
declare(strict_types=1);

/**
 * @author      Bram(us) Van Damme <bramus@bram.us>
 * @copyright   Copyright (c), 2013 Bram(us) Van Damme
 * @license     MIT public license
 */
namespace Bramus\Router;

/**
 * Route Interface.
 */
interface RouteInterface
{
	public const GET_METHOD = 'GET';
	public const POST_METHOD = 'POST';
	public const PUT_METHOD = 'PUT';
	public const DELETE_METHOD = 'DELETE';
	public const PATCH_METHOD = 'PATCH';
	public const OPTIONS_METHOD = 'OPTIONS';
	public const HEAD_METHOD = 'HEAD';

	public function getHandler(): mixed;

	public function getPattern(): string;

	public function getMethods(): array;
}
