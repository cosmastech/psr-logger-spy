<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class ErrorLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::ERROR;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
