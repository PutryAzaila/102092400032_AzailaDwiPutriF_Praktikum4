<?php
include_once('koneksi.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = mysqli_query($mysqli, "DELETE FROM demo_crud WHERE id = '$id'");
    // $mysqli adalah variabel yang digunakan pada file koneksi.php

    if ($sql === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Data tidak valid";
    }
}
?>
