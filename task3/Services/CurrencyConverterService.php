<?php

declare(strict_types=1);

require_once __DIR__ . '/ExchangeValueService.php';


class CurrencyConverterService
{
    const ROUND_TO_THOUSANDTHS = 3;

    /**
     * Convert currency
     *
     * @param float $value
     * @param Currency $fromCurrency
     * @param Currency $toCurrency
     * @return float
     */
    public function convertCurrency(float $value, Currency $fromCurrency, Currency $toCurrency): float
    {
        $exchangeValueService = new ExchangeValueService();

        $exchangeValueToUsd   = $exchangeValueService->getExchangeValue($fromCurrency);
        $exchangeValueFromUsd = $exchangeValueService->getExchangeValue($toCurrency, true);

        $convertedValue = $value * $exchangeValueToUsd * $exchangeValueFromUsd;

        return round($convertedValue, self::ROUND_TO_THOUSANDTHS);
    }
}
