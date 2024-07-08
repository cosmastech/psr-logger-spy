<?php

namespace Cosmastech\PsrLoggerSpy\Exceptions;

use Exception;

final class NoMatchingLogTypeException extends Exception
{
    public static function fromLogLevel(mixed $logLevel): static
    {
        return new NoMatchingLogTypeException("Could not find a matching LogLevelEnum case for {$logLevel}");
    }
}
