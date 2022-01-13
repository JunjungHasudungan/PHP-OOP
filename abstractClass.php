<?php

abstract class Produk 
{
    // can be have constructor
    public function __construct(
        public String $nama, public int $batch
        )
    {}

    // if we want have method, just make signature method and still use keyword abstract also
    abstract public function getName():String;
    abstract public function getBatch():int;
}

class Buku extends Produk
{
    public function getName():String
    {
        return $this->nama . "<br>";
    }

    public function getBatch(): int
    {
        return $this->batch;
    }

    public function display()
    {
        echo $this->getName();
        echo $this->getBatch();
    }
}

$buku = new Buku("Moral landscape", 2010);

echo $buku->display();
