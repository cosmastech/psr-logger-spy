<?php

namespace Cosmastech\PsrLoggerSpy;

use Cosmastech\PsrLoggerSpy\Exceptions\NoMatchingLogTypeException;
use Cosmastech\PsrLoggerSpy\ValueObjects\AbstractLog;
use Stringable;

interface LogFactoryInterface
{
    /**
     * @param  mixed  $level
     * @param  Stringable|string  $message
     * @param  array<mixed, mixed>  $context
     * @return AbstractLog
     *
     * @throws NoMatchingLogTypeException
     */
    public function createLog($level, Stringable|string $message, array $context): AbstractLog;
}
