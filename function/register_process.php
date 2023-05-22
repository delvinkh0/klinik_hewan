<?php
include '../koneksi/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah username sudah terdaftar
    $checkQuery = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
    if (mysqli_num_rows($checkQuery) > 0) {
        $errorMessage = "Akun sudah terdaftar";
        header('location: ../pages/register.php?err='.$errorMessage);
    } else {
        // Jika username belum terdaftar, lakukan proses registrasi
        $query = mysqli_query($koneksi, "INSERT INTO user (username, password) VALUES ('$username', '$password')");

        if ($query) {
            header('location: ../pages/login.php');
        } else {
            $errorMessage = "Registrasi gagal!";
        }
    }
}
?>