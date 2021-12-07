<?php
require_once "conf/konek.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halama kelola data</title>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <div>
        <h1>Informasi akun aktif</h1>

        <div>
            <span>akun id</span>
            <span><?php echo $_SESSION['akun_id'] ?></span>
        </div>
        <div>
            <span>username</span>
            <span><?php echo $_SESSION['username'] ?></span>
        </div>
        <div>
            <span>email</span>
            <span><?php echo $_SESSION['email'] ?></span>
        </div>
    </div>

    <br>
    <div>
        <h2>Kelola akun</h2>

        <div>
            <h3>Kelola mahasisswa</h3>
            <table>
                <thead>
                    <tr>
                        <td>nim</td>
                        <td>nama</td>
                        <td>email</td>
                        <td>aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM mahasiswa";
                    $query = $koneksi->query($sql);

                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row['nim'] . "</td>
                                <td>" . $row['nama'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td><a href='hapus.php?hapus=" . $row['nim'] . "&tabel=mahasiswa&where=nim'>hapus</a></td>
                            </tr>";
                        }
                    } else {
                        $msg = 'error';
                    }
                    ?>
                </tbody>
            </table>
        </div>


        <div>
            <h3>Kelola mata kuliah</h3>
            <table>
                <thead>
                    <tr>
                        <td>kode_mk</td>
                        <td>nama_mk</td>
                        <td>sks</td>
                        <td>aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM mata_kuliah";
                    $query = $koneksi->query($sql);

                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row['kode_mk'] . "</td>
                                <td>" . $row['nama_mk'] . "</td>
                                <td>" . $row['sks'] . "</td>
                                <td><a href='hapus.php?hapus=" . $row['kode_mk'] . "&tabel=mata_kuliah&where=kode_mk'>hapus</a></td>
                            </tr>";
                        }
                    } else {
                        $msg = 'error';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>