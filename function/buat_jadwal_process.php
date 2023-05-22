<?php
include '../koneksi/koneksi.php';
session_start();

$jenis_hewan = $_POST['jenis_hewan'];
$tanggal_booking = $_POST['tanggal_booking'];
$waktu_checkup = $_POST['waktu_checkup'];
$user = $_SESSION['id'];

$query = mysqli_query($koneksi, "INSERT INTO jadwal (user_id, jenis_hewan, tanggal_booking, waktu_checkup) VALUES ('$user','$jenis_hewan', '$tanggal_booking', '$waktu_checkup')");

if ($query) {
    header('location: ../pages/tabel_jadwal.php');
} else {
    echo "Gagal membuat jadwal!";
}
?>
