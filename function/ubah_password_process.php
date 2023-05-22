<?php
session_start();
include '../koneksi/koneksi.php';

$username = $_SESSION['username'];
$current_password = $_POST['current_password'];
$new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if (password_verify($current_password, $data['password'])) {
    // Jika password lama cocok
    $update_query = mysqli_query($koneksi, "UPDATE user SET password='$new_password' WHERE username='$username'");

    if ($update_query) {
        echo "Password berhasil diubah!";
        header('location: ../pages/login.php');
    } else {
        echo "Gagal mengubah password!";
    }
} else {
    // Jika password lama tidak cocok
    echo "Password lama salah!";
}
?>
