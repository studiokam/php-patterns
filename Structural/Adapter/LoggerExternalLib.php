<?php

namespace DesignPatterns\Structural\Adapter;


class LoggerExternalLib
{
    /**
     * @param string $log
     */
    public function saveLogIntoFile(string $log): void
    {
        $logFileName = 'data/log/log_' . date('Y-M-d') . '.log';
        file_put_contents($logFileName, $this->createLogMessage($log), FILE_APPEND);
    }

    /**
     * @param string $message
     * @return string
     */
    private function createLogMessage(string $message): string
    {
        return sprintf("%s: '%s'\n", (new \DateTimeImmutable())->format('H:i'), $message);
    }
}
