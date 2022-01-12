<?php
// polimorphism menggunakan interface 

interface Grosier
{
    public function checkHarga($jumlah);
}

class Reseller implements Grosier
{
    public function __construct(
        public $jumlah = 0, 
        public $harga = 2000)
        {}

    public function checkHarga($jumlah) :int
    {
        $total = ($jumlah > 0) ? ($jumlah * $this->harga) : (0);
    
        return $total;
    } 
}

$reseller1 = new Reseller();

echo $reseller1->checkHarga(jumlah: 10);