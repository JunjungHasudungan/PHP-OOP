<?php

class Transaction
{
    // typed properthies in construct
    public function __construct(
        private float $amount, 
        private string $description)
    {}
    // method with params and type properthies
    public function addTax(float $rate) :Transaction
    {
        $this->amount += $this->amount * $rate / 100; // 108

        return $this;
    }
// with chaining method
    public function addDiscon(float $rate) : Transaction
    {
        $this->amount -= $this->amount * $rate / 100; // 97.2

        return $this;
    }

    public function getAmount() :float
    {
        return $this->amount;
    }
}

echo $transaction = (new Transaction(100, 'Transaction 3'))
                    ->addTax(rate: 8)
                    ->addDiscon(rate: 10)
                    ->getAmount();
