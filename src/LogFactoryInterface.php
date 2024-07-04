<?php

namespace Cosmastech\PsrLoggerSpy;

use Stringable;

interface LogFactory
{
    public function createLog($level, Stringable|string $message, array $context);
}