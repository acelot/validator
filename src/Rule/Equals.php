<?php declare(strict_types=1);

namespace Acelot\Validator\Rule;

use Acelot\Validator\Exception\EqualsException;
use Acelot\Validator\AssertInterface;

final class Equals implements AssertInterface
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * @var bool
     */
    private $strict;

    public function __construct($value, bool $strict = true)
    {
        $this->value = $value;
        $this->strict = $strict;
    }

    /**
     * @param mixed $value
     *
     * @throws EqualsException
     */
    public function assert($value): void
    {
        $isEqual = $this->strict ? $this->value === $value : $this->value == $value;
        if (!$isEqual) {
            throw EqualsException::create($this->value);
        }
    }
}