<?php


abstract class Currency
{
    /**
     * Return short name of currency
     *
     * @return string
     */
    abstract public function getShortName(): string;

    /**
     * Return full name of currency
     *
     * @return string
     */
    abstract public function getFullName(): string;
}
