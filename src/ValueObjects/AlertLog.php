<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class AlertLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::ALERT;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
