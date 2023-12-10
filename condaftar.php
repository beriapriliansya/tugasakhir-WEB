<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

include "koneksi.php";

$insert = $conn->query("INSERT tbl_users (nama, email, password) VALUES ('$nama', '$email', '$password')");

if ($insert) {
    echo "Berhasil Disimpan";
    header('Location: formdaftar.php');
} else {
    echo "Gagal Disimpan";
}

?>
