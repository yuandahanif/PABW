<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: index.php');
}

?>
<nav>
    <a href="halaman_utama.php">Kelola Akun</a>
    <a href="kelola_data.php">Kelola Data</a>
    <a href="logout.php">Logout</a>
</nav>