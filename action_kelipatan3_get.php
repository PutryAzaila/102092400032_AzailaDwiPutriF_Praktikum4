<?php
$angka = $_GET['angka'];
    if ($angka % 3 == 0) {
        echo "Hasil : $angka adalah bilangan kelipatan 3";
    } else {
        echo "Hasil : $angka adalah bilangan bukan kelipatan 3";
    }
?>
 