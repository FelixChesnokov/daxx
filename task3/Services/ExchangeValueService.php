<?php

declare(strict_types=1);


class ExchangeValueService
{
    /**
     *  Return exchange to USD value for currency.
     *  If $isReversed == true return exchange value from USD to current currency
     *
     * @param Currency $currency
     * @param bool $isReversed
     * @return float
     */
    public function getExchangeValue(Currency $currency, bool $isReversed = false): float
    {
        // here we get currency exchange value by pair from database, file or API

        // it's temporary code just for tests
        $exchangeValue = (float)1;
        switch ($currency->getShortName()) {
            case 'USD':
                $exchangeValue = (float)1;
                break;
            case 'UAH':
                $exchangeValue = 0.037;
                break;
            case 'RUB':
                $exchangeValue = 0.014;
                break;
        }

        return $isReversed ? 1/$exchangeValue : $exchangeValue;
    }
}
