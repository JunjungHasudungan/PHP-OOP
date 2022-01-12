<?php

class Produk
{
    public function __construct(public $nama, public $jenis)
    {}

    public function info()
    {
        echo "Nama Produk : ". $this->nama .
        "<br> Jenis Produk : ". $this->jenis;
    }
}

class Elektronik extends Produk
{

    public function __construct(public $nama, public $jenis, public $brand)
    {
        // must be recall construct parent
        parent::__construct($nama, $jenis);
    }
}

$elektronik = new Elektronik(nama: "5S", jenis: "Handphone", brand: "Iphone");

echo $elektronik->info();