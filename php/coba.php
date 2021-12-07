<?php
// echo"Halo ";echo"saya yuanda "." gabung";
// $tahunLahirJurusan = [
//     'TE' => 1997,
//     'TM' => 1999,
//     'IF' => 1994
// ];
//
// var_dump($tahunLahirJurusan);

$mda = [
    'nim' => 20523134,
    'nama' => 'yuanda hanif h',
    'tanggal_lahir' => '21-6-2002',
    'orang_tua' => [
        'R','S'
    ],
];
$Jurusan = [
    'TK' => 521,
    'TIND' => 522,
    'TINF' => 523,
    'TE' => 524,
    'TM' => 525
];

echo 'NIM: '.$mda['nim'];
echo '<br/> Nama: ';
echo $mda['nama'];
echo '<br/>';
echo "tanggal lahir: " . $mda['tanggal_lahir'];
echo "<br/>Orang Tua: ";
echo '<br/> Ayah: ';
echo $mda['orang_tua'][1];
echo '<br/> Ibu: ';
echo $mda['orang_tua'][0];
echo '<br/>';
echo "Tahun masuk: 2020";
echo '<br/> Usia: ';
echo date('Y') - date('Y', strtotime($mda['tanggal_lahir'])) . ' tahun ';
echo date('m') - date('m', strtotime($mda['tanggal_lahir'])) . ' bulan ';
echo date('d') - date('d', strtotime($mda['tanggal_lahir'])) . ' hari ';
echo '<br/>';
echo "jurusan: teknik informatika";
?>

