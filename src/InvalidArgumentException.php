<?php
namespace Cityware\Exception;

use InvalidArgumentException;

/**
 * Invalid argument exception
 *
 * Exception thrown thrown if an argument does not match with the expected
 * value.
 */
class InvalidArgumentException extends InvalidArgumentException implements ExceptionInterface
{
}
