<?php

$host = "localhost";
$user = "root";
$pass = "sayaka23";
$db = 'kuliah_mahasiswa';

$koneksi = new mysqli($host, $user, $pass, $db);

if ($konek->connect_error) {
    die('koneksi gagal: ' . $konek->connect_error . '<br/>');
}

echo 'koneksi sukses <br/>';
