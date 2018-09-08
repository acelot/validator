<?php declare(strict_types=1);

namespace Acelot\Assert\Exception;

final class ContainsException extends AbstractAssertException
{
    public static function create(): ContainsException
    {
        return new self('Must be contained in');
    }
}
