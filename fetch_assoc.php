<?php

include 'connect.php';

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

while ($row = mysqli_fetch_assoc($query)) {

    echo "<tr>";

    echo "<td>" . $row['id_transaksi'] . "</td>";
    echo "<td>" . $row['id_produk'] . "</td>";
    echo "<td>" . $row['tgl_transaksi'] . "</td>";
    echo "<td>" . $row['kuantitas'] . "</td>";
    echo "<td>" . $row['harga'] . "</td>";
    echo "<td>" . $row['id_pelanggan'] . "</td>";

    echo "</tr>";
}

mysqli_free_result($query);

?>

</table>

</body>

</html>
