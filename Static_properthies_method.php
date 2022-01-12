<?php

class Human
{
    public static $nama = "Name";

    public function getNama()
    {
        // if we want to use atribute, we include self:: atribute name
        return self::$nama;

    }

    public static function setNama(String $nama)
    {
        self::$nama = $nama;

        // return self::$nama;
    }
}

$human = new Human;
$human->setNama(nama: "Hasudungan");
echo $human->getNama();