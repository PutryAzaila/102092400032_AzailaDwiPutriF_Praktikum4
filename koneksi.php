<?php
/*
Port yang digunakan pada program ini adalah 8111.
Jika tidak mengubah port pada XAMPP maka tidak perlu menambahkan 8111
*/
$host   = 'localhost';
$db     = 'demo_ajax';
$dbuser = 'root';
$dbpass = '';

$mysqli = mysqli_connect($host, $dbuser, $dbpass, $db);
?>