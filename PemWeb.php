<?php

$nama = "";
$nim = "";
$prodi = "";
$semester = "";
$umur = "";
$hobi = "";
$cita_cita = "";

if (isset($_GET['kirim'])) {
    $nama = $_GET['nama'];
    $nim = $_GET['nim'];
    $prodi = $_GET['prodi'];
    $semester = $_GET['semester'];
    $umur = $_GET['umur'];
    $hobi = $_GET['hobi'];
    $cita_cita = $_GET['cita_cita'];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Perkenalan Diri</title>
</head>

<body>

<h1>Form Perkenalan Diri</h1>

<form method="GET">

    Nama:<br>
    <input type="text" name="nama" required>
    <br><br>

    NIM:<br>
    <input type="text" name="nim" required>
    <br><br>

    Program Studi:<br>
    <input type="text" name="prodi" required>
    <br><br>

    Semester:<br>
    <input type="number" name="semester" min="1" max="14" required>
    <br><br>

    Umur:<br>
    <input type="number" name="umur" required>
    <br><br>

    Hobi:<br>
    <input type="text" name="hobi" required>
    <br><br>

    Cita-cita:<br>
    <input type="text" name="cita_cita" required>
    <br><br>

    <input type="submit" name="kirim" value="Tampilkan">

</form>

<?php if (isset($_GET['kirim'])) { ?>

<hr>

<h1>Perkenalan Diri</h1>

<p>Nama: <?php echo $nama; ?></p>
<p>NIM: <?php echo $nim; ?></p>
<p>Program Studi: <?php echo $prodi; ?></p>
<p>Semester: <?php echo $semester; ?></p>
<p>Umur: <?php echo $umur; ?> tahun</p>
<p>Hobi: <?php echo $hobi; ?></p>
<p>Cita-cita: <?php echo $cita_cita; ?></p>

<?php } ?>

</body>
</html>