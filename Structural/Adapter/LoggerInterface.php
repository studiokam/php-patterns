<?php

namespace DesignPatterns\Structural\Adapter;

interface LoggerInterface
{
    public function log(string $logMessage): void;
}