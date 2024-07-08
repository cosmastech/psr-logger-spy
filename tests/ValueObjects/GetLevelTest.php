<?php

namespace Cosmastech\PsrLoggerSpy\Tests\ValueObjects;

use Cosmastech\PsrLoggerSpy\LogLevelEnum;
use Cosmastech\PsrLoggerSpy\ValueObjects\AlertLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\CriticalLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\DebugLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\EmergencyLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\ErrorLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\InfoLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\NoticeLog;
use Cosmastech\PsrLoggerSpy\ValueObjects\WarningLog;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class GetLevelTest extends TestCase
{
    #[Test]
    public function debugLog_logLevelIsDebug(): void
    {
        // Given
        $log = new DebugLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::DEBUG, $logLevel);
    }

    #[Test]
    public function infoLog_logLevelIsInfo(): void
    {
        // Given
        $log = new InfoLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::INFO, $logLevel);
    }

    #[Test]
    public function noticeLog_logLevelIsNotice(): void
    {
        // Given
        $log = new NoticeLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::NOTICE, $logLevel);
    }

    #[Test]
    public function warningLog_logLevelIsWarning(): void
    {
        // Given
        $log = new WarningLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::WARNING, $logLevel);
    }

    #[Test]
    public function errorLog_logLevelIsError(): void
    {
        // Given
        $log = new ErrorLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::ERROR, $logLevel);
    }

    #[Test]
    public function criticalLog_logLevelIsCritical(): void
    {
        // Given
        $log = new CriticalLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::CRITICAL, $logLevel);
    }

    #[Test]
    public function alertLog_logLevelIsAlert(): void
    {
        // Given
        $log = new AlertLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::ALERT, $logLevel);
    }

    #[Test]
    public function emergencyLog_logLevelIsEmergency(): void
    {
        // Given
        $log = new EmergencyLog("irrelevant", []);

        // When
        $logLevel = $log->getLevel();

        // Then
        self::assertEquals(LogLevelEnum::EMERGENCY, $logLevel);
    }
}
