<?php
session_start();
include '../koneksi/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) == 0) {
    // Jika username tidak ditemukan
    echo "Username tidak ditemukan!";
} else {
    // Jika username ditemukan
    if (password_verify($password, $data['password'])) {
        // Jika password cocok
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $data['id'];
        header('location: ../pages/menu_utama.php');
    } else {
        // Jika password tidak cocok
        echo "Password salah!";
    }
}
?>
