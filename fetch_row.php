<?php

include 'connect.php';

$table_name = "sales";

$sql = "CREATE TABLE IF NOT EXISTS `$table_name` (
    `id_transaksi` INT(11) AUTO_INCREMENT,
    `id_produk` INT(11) NOT NULL,
    `tgl_transaksi` DATE NOT NULL,
    `kuantitas` INT(11) NOT NULL,
    `harga` INT(11) NOT NULL,
    `id_pelanggan` INT(11) NOT NULL,
    PRIMARY KEY (`id_transaksi`),
    UNIQUE KEY `unique_transaksi`
    (`id_produk`, `tgl_transaksi`, `id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Gagal membuat tabel: " . mysqli_error($conn));
}

// $sql = "INSERT INTO $table_name
//     (id_produk, tgl_transaksi, kuantitas, harga, id_pelanggan)
//     VALUES
//     (1, '2023-01-01', 10, 10000, 1),
//     (2, '2023-01-02', 5, 20000, 2),
//     (3, '2023-01-03', 8, 15000, 3),
//     (4, '2023-01-04', 12, 25000, 4),
//     (5, '2023-01-05', 7, 30000, 5)";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Query INSERT gagal: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sales</title>
</head>

<body>

<h2>Data Sales</h2>

<table border="1">

    <tr>
        <th>ID Transaksi</th>
        <th>ID Produk</th>
        <th>Tanggal Transaksi</th>
        <th>Kuantitas</th>
        <th>Harga</th>
        <th>ID Pelanggan</th>
    </tr>

<?php

$sql = "SELECT * FROM sales";

$query = mysqli_query($conn, $sql);

if (!$query) {
    die("Query SELECT gagal: " . mysqli_error($conn));
}

while ($row = mysqli_fetch_row($query)) {

    echo "<tr>";

    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "<td>" . $row[2] . "</td>";
    echo "<td>" . $row[3] . "</td>";
    echo "<td>" . $row[4] . "</td>";
    echo "<td>" . $row[5] . "</td>";

    echo "</tr>";
}

mysqli_free_result($query);

?>

</table>

</body>

</html>
