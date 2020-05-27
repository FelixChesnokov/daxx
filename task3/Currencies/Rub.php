<?php

declare(strict_types=1);

require_once __DIR__ . '/Currency.php';


class Rub extends Currency
{
    private string $shortName = 'RUB';

    private string $fullName = 'Russian ruble';

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
