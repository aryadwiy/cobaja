<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "latihan";
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    else {
        echo "Koneksi berhasil <br>";
    }
?>
