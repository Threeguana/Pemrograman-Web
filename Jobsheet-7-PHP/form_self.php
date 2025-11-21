<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>

        <?php
        // inisialisasi Variabel
        $namaErr = "";
        $nama = "";

        // cek apakah form sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // validasi nama
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi!";
            } else {
                $nama = $_POST["nama"];
                echo "Data berhasil disimpan!";
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <span style="color:red"><?php echo $namaErr; ?></span><br><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
