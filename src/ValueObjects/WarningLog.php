<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class WarningLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::WARNING;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
