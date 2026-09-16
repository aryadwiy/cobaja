
<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "AryaDwiP" && $password == "2507411027") {

        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        echo "<script>
                alert('Selamat Datang Admin');
              </script>";

    } else {

        echo "<script>
                alert('Login Gagal!');
              </script>";
    }
}


if (isset($_POST['logout'])) {

    session_destroy();

    header("Location: index.php");
    exit;
}


$hasil = "";

if (isset($_POST['hitung'])) {

    $angka1 = $_POST['angka1'];
    $angka2 = $_POST['angka2'];
    $operator = $_POST['operator'];

    switch ($operator) {

        case "+":
            $hasil = $angka1 + $angka2;
            break;

        case "-":
            $hasil = $angka1 - $angka2;
            break;

        case "*":
            $hasil = $angka1 * $angka2;
            break;

        case "/":
            if ($angka2 != 0) {
                $hasil = $angka1 / $angka2;
            } else {
                $hasil = "Tidak bisa dibagi 0!";
            }
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login dan Kalkulator</title>
</head>

<body>

<?php

if (!isset($_SESSION['login'])) {

?>

    <h1>Login</h1>

    <form method="POST">

        Username:
        <br>
        <input type="text" name="username" required>

        <br><br>

        Password:
        <br>
        <input type="password" name="password" required>

        <br><br>

        <button type="submit" name="login">
            Login
        </button>

    </form>

<?php

} else {

?>

    <h1>Selamat Datang Admin</h1>

    <h2>Kalkulator Sederhana</h2>

    <form method="POST">

        <label>Angka 1:</label>
        <br>
        <input type="number" name="angka1" required>

        <br><br>

        <label>Operator:</label>
        <br>

        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <br><br>

        <label>Angka 2:</label>
        <br>
        <input type="number" name="angka2" required>

        <br><br>

        <button type="submit" name="hitung">
            Hitung
        </button>

    </form>

    <?php

    if ($hasil !== "") {
        echo "<h3>Hasil = $hasil</h3>";
    }

    ?>

    <br>

    <form method="POST">
        <button type="submit" name="logout">
            Logout
        </button>
    </form>

<?php

}

?>

</body>
</html>

