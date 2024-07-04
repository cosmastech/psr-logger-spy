<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use ArrayAccess;
use BadMethodCallException;
use Cosmastech\PsrLoggerSpy\LogLevelEnum;
use OutOfBoundsException;
use Stringable;

abstract class AbstractLog implements ArrayAccess
{
    public function __construct(private readonly Stringable|string $message, private readonly array $context = [])
    {
    }

    public function getMessage(): Stringable|string
    {
        return $this->message;
    }

    public function getContext(): array
    {
        return $this->context;
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
