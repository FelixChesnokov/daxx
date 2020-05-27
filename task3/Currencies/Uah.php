<?php

declare(strict_types=1);

require_once __DIR__ . '/Currency.php';


class Uah extends Currency
{
    private string $shortName = 'UAH';

    private string $fullName = 'Ukrainian hryvnia';

    /**
     * Return short name of currency
     *
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * Return full name of currency
     *
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }
}
