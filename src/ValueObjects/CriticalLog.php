<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class CriticalLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::CRITICAL;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
