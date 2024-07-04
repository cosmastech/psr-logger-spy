<?php

namespace Cosmastech\PsrLoggerSpy;

use Cosmastech\PsrLoggerSpy\Exceptions\NoMatchingLogTypeException;
use Cosmastech\PsrLoggerSpy\ValueObjects\AbstractLog;
use Stringable;

interface LogFactoryInterface
{
    /**
     * @throws NoMatchingLogTypeException
     */
    public function createLog($level, Stringable|string $message, array $context): AbstractLog;
}
