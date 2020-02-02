<?php
// pertemuan 2 - php dasar
//sintak PHP

// standar output
// echo , print
// print_r
// var_dump


//penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML dalam PHP


// variabel dan Tipe data
// variabel
// variabel tidak boleh diawali dengan angka tetapi boleh mnegandung angka
// $nama ="irfan Nurahman";
// echo "Halo, nama saya $nama";

// Operator 
// Aritmatika
// + - * / %

// $x = 10;
// $y = 20;
// echo $x * $y;

// Pengabung string / concatenation / concat
// .

// $nama_depan = "irfan";
// $nama_belakang = "Nurahman";
// echo "Nama Saya ".$nama_depan." ".$nama_belakang;

//Assingnment
// -, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Irfan";
// $nama .= " ";
// $nama .="Nurahman";
// echo $nama;


// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1<5);

// identitas
// === , !==
// var_dump(1 === "1");

// Logika
// &&, ||, !(AND OR NOT)
$x = 30;
var_dump($x<20 && $x % 2 == 0);

var_dump($x<20 || $x % 2 == 0);

?>


