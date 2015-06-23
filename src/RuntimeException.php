<?php
namespace Cityware\Exception;


use RuntimeException;
/**
 * Runtime exception
 *
 * Exception thrown if an error which can only be found on runtime occurs.
 */
class RuntimeException extends RuntimeException implements ExceptionInterface
{
}
