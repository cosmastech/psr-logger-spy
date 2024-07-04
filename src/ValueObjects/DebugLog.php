<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class DebugLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::DEBUG;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
