<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class NoticeLog extends AbstractLog
{
    private const LOG_LEVEL = LogLevelEnum::NOTICE;

    public function getLevel(): LogLevelEnum
    {
        return self::LOG_LEVEL;
    }
}
