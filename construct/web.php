<?php


class Mobil {
    private $warna;
    private $merk;
    private $tahun;

    public function __construct($warna, $merk, $tahun) {
        $this->warna = $warna;
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    public function getWarna() {
        return $this->warna;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function gettahun() {
        return $this->tahun;
    }
}