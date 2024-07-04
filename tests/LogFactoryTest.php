<?php

namespace Cosmastech\PsrLoggerSpy\Tests;

use Cosmastech\PsrLoggerSpy\LogFactory;
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
use Psr\Log\LogLevel;

class LogFactoryTest extends TestCase
{
    #[Test]
    public function createLog_debugString_returnsDebugLog()
    {
        // Given
        $logLevel = LogLevel::DEBUG;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(DebugLog::class, $log);
        self::assertEquals(LogLevelEnum::DEBUG, $log->getLevel());
    }

    #[Test]
    public function createLog_infoString_returnsInfoLog()
    {
        // Given
        $logLevel = LogLevel::INFO;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(InfoLog::class, $log);
        self::assertEquals(LogLevelEnum::INFO, $log->getLevel());
    }

    #[Test]
    public function createLog_noticeString_returnsNoticeLog()
    {
        // Given
        $logLevel = LogLevel::NOTICE;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(NoticeLog::class, $log);
        self::assertEquals(LogLevelEnum::NOTICE, $log->getLevel());
    }

    #[Test]
    public function createLog_warningString_returnsWarningLog()
    {
        // Given
        $logLevel = LogLevel::WARNING;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(WarningLog::class, $log);
        self::assertEquals(LogLevelEnum::WARNING, $log->getLevel());
    }

    #[Test]
    public function createLog_errorString_returnsErrorLog()
    {
        // Given
        $logLevel = LogLevel::ERROR;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(ErrorLog::class, $log);
        self::assertEquals(LogLevelEnum::ERROR, $log->getLevel());
    }

    #[Test]
    public function createLog_criticalString_returnsCriticalLog()
    {
        // Given
        $logLevel = LogLevel::CRITICAL;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog(
            $logLevel,
            "irrelevant",
            ["key" => "value", "another_key" => "another_value"]
        );

        // Then
        self::assertInstanceOf(CriticalLog::class, $log);
        self::assertEquals(LogLevelEnum::CRITICAL, $log->getLevel());
    }

    #[Test]
    public function createLog_alertString_returnsAlertLog()
    {
        // Given
        $logLevel = LogLevel::ALERT;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(AlertLog::class, $log);
        self::assertEquals(LogLevelEnum::ALERT, $log->getLevel());
    }

    #[Test]
    public function createLog_emergencyString_returnsEmergencyLog()
    {
        // Given
        $logLevel = LogLevel::EMERGENCY;

        // And
        $factory = new LogFactory();

        // When
        $log = $factory->createLog($logLevel, "irrelevant", ["key" => "value"]);

        // Then
        self::assertInstanceOf(EmergencyLog::class, $log);
        self::assertEquals(LogLevelEnum::EMERGENCY, $log->getLevel());
    }

}