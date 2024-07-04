<?php

namespace Cosmastech\PsrLoggerSpy\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;

class InfoLog extends AbstractLog
{
    use GetLevelTrait;

    private const LOG_LEVEL = LogLevelEnum::INFO;
}
