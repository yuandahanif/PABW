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
    <title>Halama utama</title>
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

        <table>
            <thead>
                <tr>
                    <td>akun_id</td>
                    <td>username</td>
                    <td>password</td>
                    <td>email</td>
                    <td>aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM akun";
                $query = $koneksi->query($sql);

                if ($query->num_rows > 0) {
                    while ($row = $query->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row['akun_id'] . "</td>
                                <td>" . $row['username'] . "</td>
                                <td>" . $row['password'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td><a href='hapus.php?hapus=" . $row['akun_id'] . "&tabel=akun&where=akun_id'>hapus</a></td>
                            </tr>";
                    }
                } else {
                    $msg = 'error';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>