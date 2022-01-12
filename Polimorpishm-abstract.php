<?php
// polimorphism menggunakan abstract class
// abstract class dapat melakukan construct dan memiliki properthies, method

abstract class Grosir
{
    abstract function getTotalHarga($jumlah):int;
}

class Jajanan extends Grosir 
{
    public function __construct(
        public $harga = 500,
        public $diskon = 10
    ){}

    public function getTotalHarga($jumlah):int
    {
        $total = ($jumlah >= 10) ? (($jumlah * $this->harga) - ($jumlah * $this->harga * $this->diskon / 100)) : ($jumlah * $this->harga);
        
        return $total;
    }
}

$pembeli1 = new Jajanan;

echo $pembeli1->getTotalHarga(jumlah: 12);