<?php

include 'conf/konek.php';

$sql = "create table matkul(
    kode_matkul int PRIMARY KEY,
    nama varchar(200) UNIQUE NOT NULL,
    id_dosen int(6) UNSIGNED,
    tanggal_dibuat date
    )";

$q = $koneksi->query($sql);

if ($q === TRUE) {
    echo "Tabel 'matkul' berhasil dibuat.";
} else {
    echo "Tabel 'matkul' gagal dibuat: " . $koneksi->error;
}

$koneksi->close();
