<?php
include ('../pages/header.php');

// Koneksi ke database
include '../koneksi/koneksi.php';

$results_per_page = 3; // Jumlah data per halaman
$total_results = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM jadwal")); // Total data jadwal
$total_pages = ceil($total_results / $results_per_page); // Total halaman

// Menentukan halaman saat ini
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$start_index = ($current_page - 1) * $results_per_page;

$query = mysqli_query($koneksi, "SELECT j.*, u.username AS pemilik FROM jadwal j JOIN user u ON j.user_id = u.id LIMIT $start_index, $results_per_page");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Jadwal</title>
</head>
<body>
    <div class="tabel_jadwal_bungkus">
        <h2>Tabel Jadwal</h2>
        <?php
        if (mysqli_num_rows($query) > 0) {
            echo '<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Jenis Hewan</th>
                    <th>Tanggal Booking</th>
                    <th>Waktu Checkup</th>
                    <th>Pemilik</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';

            while ($data = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . $data['id'] . "</td>";
                echo "<td>" . $data['jenis_hewan'] . "</td>";
                echo "<td>" . $data['tanggal_booking'] . "</td>";
                echo "<td>" . $data['waktu_checkup'] . "</td>";
                echo "<td>" . $data['pemilik'] . "</td>";
                echo "<td>";
                echo "<a href='update_jadwal.php?id=" . $data['id'] . "'><input type='button' class='btn-update'></a> ";
                echo "<a href='../function/delete_jadwal.php?id=" . $data['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus jadwal ini?\")'><input type='button' class='btn-hapus'></a>";
                echo "</td>";
                echo "</tr>";
            }

            echo '</tbody>
            </table>';
        } else {
            echo '<h2>Tidak ada jadwal</h2>';
        }
        ?>

        <div class="pagination">
            <?php
            if ($current_page > 1) {
                echo "<a href='tabel_jadwal.php?page=" . ($current_page - 1) . "' class='prev'>&laquo; Previous</a>";
            }

            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='tabel_jadwal.php?page=" . $i . "'";

                if ($i == $current_page) {
                    echo " class='active'";
                }

                echo ">" . $i . "</a>";
            }

            if ($current_page < $total_pages) {
                echo "<a href='tabel_jadwal.php?page=" . ($current_page + 1) . "' class='next'>Next &raquo;</a>";
            }
            ?>
        </div>
    </div>
</body>
</html>
