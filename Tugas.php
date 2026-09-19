<?php

include 'connect.php';

$table_name = "Mahasiswa";

$sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
    `nama` VARCHAR(50) NOT NULL,
    `nim` INT(5) NOT NULL,
    `tugas` INT(5) NOT NULL,
    `uts` INT(5) NOT NULL,
    `uas` INT(5) NOT NULL
)";

$query = mysqli_query($conn, $sql);

if(!$query) {
    die("Gagal membuat tabel: " . mysqli_error($conn));
}

$sql = "INSERT INTO $table_name
    (nama, nim, tugas, uts, uas)
    VALUES
    ('Bagus Widaya', 25074, 80, 85, 90),
    ('Raja Putra', 25072, 75, 80, 85),
    ('Akena Shiina', 25071, 90, 95, 100),
    ('Arya Dwi', 25073, 70, 75, 80),
    ('David', 25075, 85, 90, 95)";

$query = mysqli_query($conn, $sql);

if(!$query) {
    die("Query INSERT gagal: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasigma</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai_Akhir</th>
        </tr>

        <?php
        $sql = "SELECT *, (tugas+uas+uts)/3 as nilai_akhir FROM $table_name";
        $query = mysqli_query($conn, $sql);

        if(!$query) {
            die("Query SELECT gagal: " . mysqli_error($conn));
        }

        while($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $row['tugas'] . "</td>";
            echo "<td>" . $row['uts'] . "</td>";
            echo "<td>" . $row['uas'] . "</td>";
            echo "<td>" . $row['nilai_akhir'] . "</td>";
            echo "</tr>";
        }

        mysqli_free_result($query);
        ?>
    </table>
</body>
</html>