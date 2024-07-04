<?php

namespace Cosmastech\PsrLoggerSpy\Exceptions;

use Exception;

class NoMatchingLogTypeException extends Exception
{
    public static function fromLogLevel($logLevel)
    {
        return new static("Could not find a matching LogLevelEnum case for {$logLevel}");
    }
}
