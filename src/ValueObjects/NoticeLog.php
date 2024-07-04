<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class NoticeLog extends AbstractLog
{
    use GetLevelTrait;

    private const LOG_LEVEL = LogLevelEnum::NOTICE;
}
