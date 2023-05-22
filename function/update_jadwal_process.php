<?php
include '../koneksi/koneksi.php';

$id = $_POST['id'];
$jenis_hewan = $_POST['jenis_hewan'];
$tanggal_booking = $_POST['tanggal_booking'];
$waktu_checkup = $_POST['waktu_checkup'];

$update_query = mysqli_query($koneksi, "UPDATE jadwal SET jenis_hewan='$jenis_hewan', tanggal_booking='$tanggal_booking', waktu_checkup='$waktu_checkup' WHERE id='$id'");

if ($update_query) {
    header('location: ../pages/tabel_jadwal.php');
} else {
    echo "Gagal mengupdate jadwal!";
}
?>
