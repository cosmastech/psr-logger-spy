<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class DebugLogObject extends AbstractLogObject
{
    public function getLevel(): LogLevelEnum
    {
        return LogLevelEnum::DEBUG;
    }
}
