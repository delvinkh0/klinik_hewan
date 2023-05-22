<?php
include '../koneksi/koneksi.php';
include ('../pages/header.php');

$id = $_GET['id'];

// Ambil data jadwal berdasarkan ID
$query = mysqli_query($koneksi, "SELECT * FROM jadwal WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Update Jadwal</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="update_jadwal_bungkus">
        <h2>Update Jadwal</h2>
        <form action="../function/update_jadwal_process.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
            <input type="text" name="jenis_hewan" value="<?php echo $data['jenis_hewan']; ?>" required>
            <input type="date" name="tanggal_booking" value="<?php echo $data['tanggal_booking']; ?>" required>
            <input type="time" name="waktu_checkup" value="<?php echo $data['waktu_checkup']; ?>" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>