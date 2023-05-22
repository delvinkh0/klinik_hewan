<?php
include '../koneksi/koneksi.php';

$id = $_GET['id'];

$delete_query = mysqli_query($koneksi, "DELETE FROM jadwal WHERE id='$id'");

if ($delete_query) {
    header('location: ../pages/tabel_jadwal.php');
} else {
    echo "Gagal menghapus jadwal!";
}
?>
