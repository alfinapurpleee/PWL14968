<?php 
include "Mahasiswa.php";
include "MataKuliah.php";


$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();


$mahasiswa_1->setData("A11.2023.12345","Aprilyani Nur Safitri");
$makul_1->setData("A11.12345","Pemrograman Web Lanjut");


var_dump($mahasiswa_1->getData());
echo "<br>";
var_dump($makul_1->getData());