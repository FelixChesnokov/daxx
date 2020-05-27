<?php

declare(strict_types=1);

require_once __DIR__ . '/Rub.php';
require_once __DIR__ . '/Uah.php';
require_once __DIR__ . '/Usd.php';


final class CurrencyStatFactory
{
    const USD = 'USD';

    const UAH = 'UAH';

    const RUB = 'RUB';

    /**
     * Create and return currency object by name
     *
     * @param string $currencyName
     * @return Currency
     */
    public static function factory(string $currencyName): Currency
    {
        switch ($currencyName) {
            case self::USD:
                return new Usd();
                break;
            case self::UAH:
                return new Uah();
                break;
            case self::RUB:
                return new Rub();
                break;
            default:
                throw new InvalidArgumentException('Unknown currency given');
        }
    }
}
