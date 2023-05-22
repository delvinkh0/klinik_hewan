<?php
include ('../koneksi/koneksi.php');
include ('../pages/header.php');


$results_per_page = 5; // Jumlah data per halaman
$total_results = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user")); // Total data user
$total_pages = ceil($total_results / $results_per_page); // Total halaman

// Menentukan halaman saat ini
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($current_page - 1) * $results_per_page;

$query = mysqli_query($koneksi, "SELECT * FROM user LIMIT $start_index, $results_per_page");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel User</title>
</head>
<body>
    <div class="tabel_user_bungkus">
        <h2>Tabel User</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data = mysqli_fetch_assoc($query)) {
                    echo "<tr>";
                    echo "<td>" . $data['id'] . "</td>";
                    echo "<td>" . $data['username'] . "</td>";
                    echo "<td>" . $data['password'] . "</td>";
                    echo "<td>";
                    echo "<a href='ubah_password.php?id=" . $data['id'] . " ' class='btn-password'>Ubah Password</a> ";
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="pagination">
    <?php
    if ($current_page > 1) {
        echo "<a href='tabel_user.php?page=" . ($current_page - 1) . "' class='prev'>&laquo; Previous</a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        echo "<a href='tabel_user.php?page=" . $i . "'";

        if ($i == $current_page) {
            echo " class='active'";
        }

        echo ">" . $i . "</a>";
    }

    if ($current_page < $total_pages) {
        echo "<a href='tabel_user.php?page=" . ($current_page + 1) . "' class='next'>Next &raquo;</a>";
    }
    ?>
</div>

    </div>
</body>
</html>
