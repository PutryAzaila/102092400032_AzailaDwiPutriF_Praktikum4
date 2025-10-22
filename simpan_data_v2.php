<?php
include_once('koneksi.php');

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = mysqli_query($mysqli, "INSERT INTO demo_crud (nama, email) VALUES ('$name', '$email')");

    if ($sql === TRUE) {
        echo "Data berhasil disimpan";
    } else {
        echo "Data gagal disimpan: " . mysqli_error($mysqli);
    }
} else {
    echo "Data tidak valid";
}
?>
