<?php
include ('../pages/header.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buat Jadwal</title>
    <link rel="stylesheet" href="../style/buat_jadwal.css">
</head>
<body>
    <div class="backgroud">
        <div class="form_jadwal">
            <form action="../function/buat_jadwal_process.php" method="POST">
                <h2>Buat Jadwal</h2>
                <select name="jenis_hewan" required>
                    <option value="">Pilih Jenis Hewan</option>
                    <option value="Anjing">Anjing</option>
                    <option value="Kucing">Kucing</option>
                    <option value="Burung">Burung</option>
                    <option value="Ikan">Ikan</option>
                </select>
                <input type="date" name="tanggal_booking" required>
                <input type="time" name="waktu_checkup" required>
                <button type="submit">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>