<?php declare(strict_types=1);

namespace Acelot\Validator\Exception;

final class ScalarTypeException extends AbstractAssertException
{
    public static function create(): ScalarTypeException
    {
        return new self('Must be a scalar');
    }
}