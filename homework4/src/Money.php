<?php

namespace App;

class Money
{
    private int $amount;
    private Currency $currency;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        if ($amount<1)
            throw new \InvalidArgumentException('Amount must be integer and more than 0. Try again!');
        $this->amount = $amount;
    }

    /**
     * @return Currency
     */
    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @param Currency $currency
     */
    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }


    public function __construct(int $amount, Currency $currency)
    {
        $this->setAmount($amount);
        $this->setCurrency($currency);
    }

    public function equals (Money $money):bool
    {
        if (($this->currency->equals($money->currency))AND ($this->amount===$money->amount))
            return true;
        return false;
    }

    public function add (Money $money):Money
    {
        if ($this->currency->equals($money->currency)){
            $this->setAmount($this->getAmount()+$money->getAmount());
        }
        else
            throw new \InvalidArgumentException('Function "add" cannot add money with different currencies. Try again!');
        return $this;
    }
}