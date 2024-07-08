<?php

namespace Cosmastech\PsrLoggerSpy;

use Cosmastech\PsrLoggerSpy\Exceptions\NoMatchingLogTypeException;
use Cosmastech\PsrLoggerSpy\ValueObjects\AbstractLog;
use Psr\Log\LoggerInterface;
use Psr\Log\LoggerTrait;
use Stringable;

class LoggerSpy implements LoggerInterface
{
    use LoggerTrait;

    /** @var array<int, AbstractLog> */
    private array $logs = [];

    public function __construct(private readonly LogFactoryInterface $logFactory)
    {
    }

    /**
     * @return array<int, AbstractLog>
     */
    public function getLogs(): array
    {
        return $this->logs;
    }

    public function clearLogs(): void
    {
        $this->logs = [];
    }

    /**
     * @param $level
     * @param  Stringable|string  $message
     * @param  array<mixed, mixed>  $context
     *
     * @return void
     *
     * @throws NoMatchingLogTypeException
     */
    public function log($level, Stringable|string $message, array $context = []): void
    {
        $this->logs[] = $this->logFactory->createLog($level, $message, $context);
    }
}
