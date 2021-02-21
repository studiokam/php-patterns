<?php

namespace DesignPatterns\Structural\Adapter;


class Card
{
    private LoggerAdapter $logger;
    private int $clientId;

    public function __construct(LoggerAdapter $logger, int $clientId) {
        $this->logger = $logger;
        $this->clientId = $clientId;
    }

    public function add(array $itemsList): void
    {
        $saveCard = "INSERT TO cards ...";
        if ($saveCard) {
            $message = "Zapisano koszyk klienta $this->clientId";
            $this->logger->log($message);
        }
    }
}
