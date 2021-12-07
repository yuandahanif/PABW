<?php
include 'conf/konek.php';

$sql = "CREATE DATABASE kuliah_mahasiswa";
$q = $koneksi->query($sql);

if ($q === TRUE) {
    echo "Basisdata 'kuliah_mahasiswa' berhasil dibuat.";
} else {
    echo "Basisdata 'kuliah_mahasiswa' gagal dibuat: " . $koneksi->error;
}

$koneksi->close();
