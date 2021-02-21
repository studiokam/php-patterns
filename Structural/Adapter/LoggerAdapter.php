<?php
namespace DesignPatterns\Structural\Adapter;


class LoggerAdapter implements LoggerInterface
{
    private LoggerExternalLib $logger;

    public function __construct(LoggerExternalLib $logger)
    {
        $this->logger = $logger;
    }

    public function log(string $logMessage): void
    {
        $this->logger->saveLogIntoFile($logMessage);
    }
}
