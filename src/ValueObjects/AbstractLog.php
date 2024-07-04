<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;
use Stringable;

abstract class AbstractLogObject
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
}
