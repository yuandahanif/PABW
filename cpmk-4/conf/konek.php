<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'sayaka23');
define('DB_NAME', 'kuliah_cpmk4');
 
/* Attempt to connect to MySQL database */
$koneksi = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($koneksi === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
