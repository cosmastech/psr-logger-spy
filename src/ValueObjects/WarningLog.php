<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class WarningLog extends AbstractLog
{
    use GetLevelTrait;

    private const LOG_LEVEL = LogLevelEnum::WARNING;

}
