<?php

namespace App;

class Currency
{
    private string $isoCode;

    /**
     * @return string
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }

    /**
     * @param string $isoCode
     */
    private function setIsoCode(string $isoCode): void
    {
        if ((strlen($isoCode)!=3) OR (!ctype_upper($isoCode)))
            throw new \InvalidArgumentException('setIsoCode function only accepts ISO 4217 currency codes. Try again!');
        $this->isoCode = $isoCode;
    }

    public function __construct($isoCode)
    {
        $this->setIsoCode($isoCode);
    }

    public function equals (Currency $currency):bool
    {
        if ($this->isoCode===$currency->isoCode)
            return true;
        return false;
    }
}