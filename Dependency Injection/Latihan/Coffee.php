<?php
require_once('Sale.php');

class Coffee
{
    public function __construct(
        private String $nama = 'coffee', // harus menyertakan tipe akses modifier yang digunakan
        private int $harga = 6500, // beserta tipe data yang digunakan pada properthies promotion
        private int $satuan = 1
    ){}

    public function nama()
    {
        return $this->nama;
    }

    public function harga()
    {
        return $this->harga;
    }

    public function satuan()
    {
        return $this->satuan;
    }

    public function get()
    {
        return "Nama : ".$this->nama() ."<br>"
        ."Harga : ".$this->harga() . "<br>"
        ."Ukuran : " . $this->satuan() . " Kg" . "<hr>";
    }
}

$coffee = new Coffee();

echo $coffee->get();