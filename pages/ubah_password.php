<?php
include ('../pages/header.php')
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Password</title>
</head>
<body>
    <div class="password_bungkus">
        <form action="../function/ubah_password_process.php" method="POST">
            <h2>Ubah Password</h2>
            <input type="password" name="current_password" placeholder="Password Lama" required>
            <input type="password" name="new_password" placeholder="Password Baru" required>
            <button type="submit">Ubah</button>
        </form>
    </div>
</body>
</html>
