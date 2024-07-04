<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class InfoLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::INFO;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
