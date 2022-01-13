<?php
/* 
pengertian :
interface- antar muka
syarat :
    * interface tidak boleh memiliki properthies
    * hanya memiliki method bisa memiliki parameter atau tidak juga boleh
    * visibily nya hanya bisa menggunakan public
    * untuk menggunakan method tersebut menggunakan keyword implements
    * ketika sudah menggunakan implements, method wajib digunakan dalam class
    */
interface Kendaraan 
{
    public function nama():String; // membuat signature / tanda tangan
    public function tahun():int;
    public function kecepatan():int;
}

class Beat implements Kendaraan 
{
    public function __construct(
        public String $nama = "Beat-pop", public int $tahun = 2016, public int $kecepatan = 100
        )
    {}
    
    public function nama():String
    {
        return $this->nama;
    }

    public function tahun():int
    {
        return $this->tahun;
    }

    public function kecepatan():int
    {
        return $this->kecepatan;
    }

    public function display()
    {
        echo "Nama Motor \t: ". $this->nama(). "<br>";
        echo "Tahun \t:".$this->tahun(). "<br>";
        echo "Kecepatan : ".$this->kecepatan()." cc <br>";
    }
}

$beat = new Beat();

echo $beat->display();