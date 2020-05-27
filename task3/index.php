<?php

require_once __DIR__ . '/Currencies/CurrencyStatFactory.php';
require_once __DIR__ . '/Services/CurrencyConverterService.php';
require_once __DIR__ . '/Services/ExchangeValueService.php';

$currencyStatFactory = new CurrencyStatFactory();

$currencyRub = $currencyStatFactory->factory('RUB');
$currencyUah = $currencyStatFactory->factory('UAH');
$currencyUsd = $currencyStatFactory->factory('USD');

// testing
$value = 277;
$currencyConverterService = new CurrencyConverterService();

// UAH -> USD
$uahToUsd = $currencyConverterService->convertCurrency($value, $currencyUah, $currencyUsd);

// USD -> UAH
$usdToUah = $currencyConverterService->convertCurrency($value, $currencyUsd, $currencyUah);

// RUB -> UAH
$rubToUah = $currencyConverterService->convertCurrency($value, $currencyRub, $currencyUah);

echo "UAH -> USD: {$uahToUsd} \n";
echo "USD -> UAH: {$usdToUah} \n";
echo "RUB -> UAH: {$rubToUah} \n";