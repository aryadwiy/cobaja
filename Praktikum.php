<?php

// Koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "latihan");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$table_name = "sales";
$sql = 'CREATE TABLE IF NOT EXISTS `' . $table_name . '` (
    `id_transaksi` INT(11) AUTO_INCREMENT,
    `id_produk` INT(11) NOT NULL,
    `tgl_transaksi` DATE NOT NULL,
    `kuantitas` INT(11) NOT NULL,
    `harga` INT(11) NOT NULL,
    `id_pelanggan` INT(11) NOT NULL,
    Primary Key (`id_transaksi`),
    KEY `id_produk` (`id_produk`)
)Engine= InnoDB DEFAULT CHARSET=utf8 Auto_increment=1;';

$query = mysqli_query($koneksi, $sql);
if(!$query){
    die("Query gagal: " . mysqli_error($koneksi));
}
echo 'Tabel '. $table_name . ' berhasil dibuat.';
$sql = 'INSERT INTO ' . $table_name . ' (id_produk, tgl_transaksi, kuantitas, harga, id_pelanggan) VALUES
    (1, "2023-01-01", 10, 10000, 1),
    (2, "2023-01-02", 5, 20000, 2),
    (3, "2023-01-03", 8, 15000, 3),
    (4, "2023-01-04", 12, 25000, 4),
    (5, "2023-01-05", 7, 30000, 5);';

$query = mysqli_query($koneksi, $sql);
if(!$query){
    die("Query gagal: " . mysqli_error($koneksi));
}
echo 'Data berhasil ditambahkan.';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id_transaksi'] . "</td>";
                echo "<td>" . $row['id_produk'] . "</td>";
                echo "<td>" . $row['tgl_transaksi'] . "</td>";
                echo "<td>" . $row['kuantitas'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "<td>" . $row['id_pelanggan'] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>