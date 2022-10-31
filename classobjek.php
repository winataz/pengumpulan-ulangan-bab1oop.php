<?php
//membuat class user
class user{
// memiliki 3 attribute/datamember/properties
// nama,umur,kelas;

}
//inisialisasi class objek
$user=new user();

//memberikan nilai setiap attributenya
$user ->Nama ="Arief";
$user ->Umur =16;
$user ->kelas="Xll RPL";

//tampilkan semua attribute yang dimiliki
echo"Nama:".$user-> nama.'<br>';
echo"Umur:".$user-> umur.'<br>';
echo"Kelas:".$user->kelas.'<br>';

//output:
//Nama:Arief
//Umur:16,
//Kelas:Xll RPL