<?php 
include "Mahasiswa.php";
include "MataKuliah.php";

$mahasiswa_1 = new Mahasiswa();
$makul_1 = new MataKuliah();


$mahasiswa_1-> setData("A11.2023.12345", "Aprilyani Nur Safitri", "2000-01-17");


var_dump($mahasiswa_1->getData());
