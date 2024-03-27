<?php

class Mahasiswa {
    private $nama;
    private $umur;
    private $nilai;

    public function __construct($nama, $umur, $nilai) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->nilai = $nilai;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function nilai() {
        if ($this->nilai >= 85) {
            return 'A';
        } elseif ($this->nilai >= 70) {
            return 'B';
        } elseif ($this->nilai >= 60) {
            return 'C';
        } else {
            return 'D';
        }
    }

    public function hasilLulus() {
        return $this->nilai >= 60 ? 'Lulus' : 'Tidak Lulus';
    }

    
}