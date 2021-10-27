<?php

class person{

    public $nama;
    public $alamat;
    public $jurusan;

    function __construct($nama, $alamat, $jurusan) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }

    public function setNama($data){
        $this->nama = $data;
    }
    public function getNama (){
        return $this->nama;
    }
    public function setAlamat($data){
        $this->alamat = $data;
    }
    public function getAlamat (){
        return $this->alamat;
    }
    public function setJurusan($data){
        $this->jurusan = $data;
    }
    public function getJurusan (){
        return $this -> jurusan;
    }
}

$abdul = new Person("Abdul Fattah Ismail","Jl. Lesung 3, Depok","Teknik Informatika 04");

echo $abdul->getNama();