<?php

// membuat class person
class Person {
    // membuat property
    public $nama;
    public $alamat;
    public $jurusan;
}

// membuat object
$Abdul = new Person();
$Abdul->nama = 'Abdul ';
echo $Abdul->nama;


$Fattah = new Person();
$Fattah->nama = 'Fattah ';
echo $Fattah->nama;

$Ismail = new Person();
$Ismail->nama = 'Ismail ';
echo $Ismail->nama, '<hr>';