<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use ArrayAccess;
use BadMethodCallException;
use Cosmastech\PsrLoggerSpy\LogLevelEnum;
use OutOfBoundsException;
use Stringable;

/**
 * @implements ArrayAccess<string, mixed>
 */
abstract class AbstractLog implements ArrayAccess
{
    /**
     * @param  Stringable|string  $message
     * @param  array<mixed, mixed>  $context
     */
    public function __construct(
        public readonly Stringable|string $message,
        public readonly array $context = []
    ) {
    }

    abstract public function getLevel(): LogLevelEnum;

    public function offsetExists(mixed $offset): bool
    {
        return in_array($offset, ['message', 'context']);
    }

    public function offsetGet(mixed $offset): mixed
    {
        if (! $this->offsetExists($offset)) {
            throw new OutOfBoundsException("{$offset} does not exist");
        }

        return $this->{$offset};
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        throw new BadMethodCallException("Log properties cannot be modified");
    }

    public function offsetUnset(mixed $offset): void
    {
        throw new BadMethodCallException("Log properties cannot be unset");
    }
}
