<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class DebugLog extends AbstractLog
{
    public function getLevel(): LogLevelEnum
    {
        return LogLevelEnum::DEBUG;
    }
}
