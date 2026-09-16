<html>
    <body>
        <h1>Operator Bitwise</h1>


        <?php
            $a = 60;
            // Biner = 0011 1100
            $b = 13;
            // Biner = 0000 1101

            //AND
            //Membandingkan setiap bit dari kedua bilangan
            //Angka biner harus sama di kedua bilangan;
            $c = $a & $b;
            echo "Hasil dari $a & $b = $c <br>";

            //OR
            //Angka biner tidak harus sama di kedua bilangan;
            $c = $a | $b;
            echo "Hasil dari $a | $b = $c <br>";

            //XOR
            //Angka biner harus berbeda di kedua bilangan;
            $c = $a ^ $b;
            echo "Hasil dari $a ^ $b = $c <br>";

            //Shift Left
            //Menggeser bit ke kiri sebanyak n kali
            $c = $a << $b;
            echo "Hasil dari $a << $b = $c <br>";

            //Shift Right
            //Menggeser bit ke kanan sebanyak n kali
            $c = $a >> $b;
            echo "Hasil dari $a >> $b = $c <br>";
        ?>
    </body>

</html>