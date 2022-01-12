<?php

require_once('Sale.php');

class Rice implements Sale
{
    // public string $name;
    public function __construct( 
        public string $nama = 'Beras',
        public int $harga = 65000,
        public int $satuan = 5,
        )
    {}

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
                ."Ukuran : " . $this->satuan() . " Kg". "<hr>";
    }
    
}
// chaining method
echo $rice = (new Rice())->get();