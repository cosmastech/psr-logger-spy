<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class DebugLog extends AbstractLog
{
    use GetLevelTrait;

    private const LOG_LEVEL = LogLevelEnum::DEBUG;
}
