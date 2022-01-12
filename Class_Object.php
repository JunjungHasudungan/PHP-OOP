<?php

class Human
{


    public function __construct(
        public $nama = "",
        public $gender = ""
    )
    {}

    public function info()
    {
        echo "Nama: ". $this->nama .
        "<br> Gender: " . $this->gender ;
    }
}

// inisialisasi object
$manusia = new Human;

$manusia->gender = "Laki-Laki";
$manusia->nama = "Hasudungan";

echo $manusia->info();
// $manusia->gender = "Laki";
