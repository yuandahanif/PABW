<?php
session_start();
require_once "conf/konek.php";

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
}


echo $_GET['hapus'];
echo $_GET['tabel'];
echo $_GET['where'];
if (null !== ($_GET['hapus']) && null !== ($_GET['tabel']) && null !== ($_GET['where'])) {
    $sql_del = "DELETE FROM " . $_GET['tabel'] . " WHERE " . $_GET['where'] . " = '" . $_GET['hapus'] . "'";
    $query = $koneksi->query($sql_del);

    if ($query->affected_rows > 0) {
        echo "data dihapus";
    }
}
