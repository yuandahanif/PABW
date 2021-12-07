<?php
session_start();
unset($_SESSION["akun_id"]);
unset($_SESSION["username"]);
unset($_SESSION["email"]);

echo 'Berhasil logout';
header('Refresh: 2; URL = index.php');
