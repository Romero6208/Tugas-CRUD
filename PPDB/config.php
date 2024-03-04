<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'PPDB';
$db = mysqli_connect('localhost', 'root', '', 'PPDB');

if(!$db) {
    die("Gagal terhubung ke database:" . mysqli_connect_error());
 }