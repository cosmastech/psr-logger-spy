<?php

namespace Cosmastech\PsrLoggerSpy;

use Psr\Log\LogLevel;

enum LogLevelEnum: string
{
    case DEBUG = LogLevel::DEBUG;
    case INFO = LogLevel::INFO;
    case NOTICE = LogLevel::NOTICE;
    case WARNING = LogLevel::WARNING;
    case ERROR = LogLevel::ERROR;
    case CRITICAL = LogLevel::CRITICAL;
    case ALERT = LogLevel::ALERT;
    case EMERGENCY = LogLevel::EMERGENCY;
}
