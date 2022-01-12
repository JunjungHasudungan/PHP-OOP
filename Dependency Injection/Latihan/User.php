<?php

require_once('Rice.php');
require_once('Coffee.php');

class User
{
    public function __construct(
        // depenction injection here 
        // declaration class with object want to use
        private Rice $rice,
        private Coffee $coffee
    ){}

    // using chaining method konsep
    public function belanjaBeras():User
    {
        $this->rice->get();

        return $this;
    }

    public function belanjaKopi():User
    {
        $this->coffee->get();

        return $this;
    }
}

$rice = new Rice();
$coffee = new Coffee();

$user = (new User(rice: $rice, coffee: $coffee))
        ->belanjaBeras()->belanjaKopi();