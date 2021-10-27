<?php

class person{

    public $nama;
    public $alamat;
    public $jurusan;

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

$abdul = new Person ();
$abdul->setNama("Abdul Fattah Ismail");
$abdul->setAlamat("Jl. Lesung 3 NO.236");
$abdul->setJurusan("Teknik Informatika 01");
echo $abdul->getNama(),'<br><hr>';
echo $abdul->getAlamat(),'<br><hr>';
echo $abdul->getJurusan();