<?php

namespace Cosmastech\PsrLoggerSpy\Tests;

use Cosmastech\PsrLoggerSpy\LogFactory;
use Cosmastech\PsrLoggerSpy\LoggerSpy;
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

class LoggerSpyTest extends TestCase
{
    private LoggerSpy $loggerSpy;

    public function setUp(): void
    {
        parent::setUp();

        $this->loggerSpy = new LoggerSpy(new LogFactory());
    }

    #[Test]
    public function getLogs_noLogs_returnsEmptyArray()
    {
        // Given LoggerSpy

        // When
        $logs = $this->loggerSpy->getLogs();

        // Then
        self::assertIsArray($logs);
        self::assertCount(0, $logs);
    }

    #[Test]
    public function emergency_writesAnEmergencyLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->emergency("my message");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(EmergencyLog::class, $logs[0]);
    }

    #[Test]
    public function alert_writesAnAlertLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->alert("my message");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(AlertLog::class, $logs[0]);
    }

    #[Test]
    public function critical_writesACriticalLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->critical("my message");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(CriticalLog::class, $logs[0]);
    }

    #[Test]
    public function error_writesAnErrorLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->error("my message");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(ErrorLog::class, $logs[0]);
    }

    #[Test]
    public function warning_writesAWarningLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->warning("my warning");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(WarningLog::class, $logs[0]);
    }

    #[Test]
    public function notice_writesANoticeLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->notice("my notice");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(NoticeLog::class, $logs[0]);
    }

    #[Test]
    public function info_writesAnInfoLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->info("my info");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(InfoLog::class, $logs[0]);
    }

    #[Test]
    public function debug_writesADebugLog()
    {
        // Given LoggerSpy

        // When
        $this->loggerSpy->debug("my debug message");

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(1, $logs);
        self::assertInstanceOf(DebugLog::class, $logs[0]);
    }

    #[Test]
    public function clearLogs_logsAreEmpty()
    {
        // Given
        $this->loggerSpy->info("my message");

        // And pre-condition
        self::assertCount(1, $this->loggerSpy->getLogs());

        // When
        $this->loggerSpy->clearLogs();

        // Then
        $logs = $this->loggerSpy->getLogs();
        self::assertCount(0, $logs);
    }
}
