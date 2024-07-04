<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class EmergencyLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::EMERGENCY;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
