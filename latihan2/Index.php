<?php 
include "Mahasiswa.php";

$mahasiswa_1 = new Mahasiswa();

$mahasiswa_1-> setData("A11.2023.12345", "Aprilyani Nur Safitri", "2000-01-17");

var_dump($mahasiswa_1->getData());
echo "<br>";
var_dump($mahasiswa_1->nama);
echo"<br>";
var_dump($mahasiswa_1->nim);