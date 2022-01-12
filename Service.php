<?php

class Service
{
    public string $nama;
    public int $umur;
    public bool $isActive = false;


    public function setNama(string $nama):self
    {
        $this->nama = $nama;

        return $this;
    }

    public function setUmur(int $umur):self
    {
        $this->$umur = $umur;

        return $this;
    }
}

echo $service = (new Service())->setNama(nama: "Hasudungan")->setUmur(umur:28);

// echo $service->setNama(nama: "Hasudungan");