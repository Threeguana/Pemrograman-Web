<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<h2>Array Terindeks</h2>
<?php
    $Listdosen = ["Elok Nur Hamdana","Unggul Pamenang", "Bagas Nugraha"];
    $Listdosen[] = "Andini Tb"; //menambahkan orang

    foreach ($Listdosen as $key => $value) {
        echo $value . "<br>";
    }

    // echo $Listdosen[0] . "<br>";
    // echo $Listdosen[1] . "<br>";
    // echo $Listdosen[3] . "<br>";
?>
</body>
</html>
