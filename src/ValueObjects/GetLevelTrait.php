<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

trait GetLevelTrait
{
    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
