<?php

namespace Cosmastech\PsrLoggerSpy;

use Cosmastech\PsrLoggerSpy\Exceptions\NoMatchingLogTypeException;
use Cosmastech\PsrLoggerSpy\ValueObjects\AbstractLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\AlertLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\CriticalLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\DebugLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\EmergencyLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\ErrorLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\InfoLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\NoticeLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\WarningLog;
use Stringable;

class LogFactory implements LogFactoryInterface
{
    /**
     * @throws NoMatchingLogTypeException
     */
    public function createLog($level, Stringable|string $message, array $context): AbstractLog
    {
        $logLevelEnumCase = is_string($level) ? $this->handleString($level) : null;

        if (is_null($logLevelEnumCase)) {
            throw NoMatchingLogTypeException::fromLogLevel($level);
        }

        $class = $this->logLevelToLogClass($logLevelEnumCase);

        return new $class($message, $context);

    }

    protected function handleString(string $level): ?LogLevelEnum
    {
        $logLevelEnumCase = LogLevelEnum::tryFrom($level);

        // @todo try handling numeric cases?
        return $logLevelEnumCase;
    }

    /**
     * @param  LogLevelEnum  $logLevel
     * @return class-string<AbstractLog>
     */
    protected function logLevelToLogClass(LogLevelEnum $logLevel): string
    {
        return match($logLevel) {
            LogLevelEnum::DEBUG => DebugLog::class,
            LogLevelEnum::INFO => InfoLog::class,
            LogLevelEnum::NOTICE => NoticeLog::class,
            LogLevelEnum::WARNING => WarningLog::class,
            LogLevelEnum::ERROR => ErrorLog::class,
            LogLevelEnum::CRITICAL => CriticalLog::class,
            LogLevelEnum::ALERT => AlertLog::class,
            LogLevelEnum::EMERGENCY => EmergencyLog::class,
        };
    }
}
