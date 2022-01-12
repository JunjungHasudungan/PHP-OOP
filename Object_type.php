<?php
interface Aritmatika
{
    public function kali($numb_a, $num_b);
}


class Produk
{
     public function __construct(
        public String $nama
     )
     {}

     public function perkalian(Aritmatika $aritmatika, $numb_a, $num_b)
     {
        // $aritmatika->kali($);
     }
}