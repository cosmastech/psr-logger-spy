<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class CriticalLog extends AbstractLog
{
    use GetLevelTrait;

    private const LOG_LEVEL = LogLevelEnum::CRITICAL;
}
