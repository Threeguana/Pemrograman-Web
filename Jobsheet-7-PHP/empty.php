<?php
$myArray = array(); //array kosong
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong";
} else {
    echo "Arrat terdefinisi dan tidak kosong";
}
echo "<br>";

if (empty($nonExistentVar)) {
    echo "Variabel 'nonExistentVar' tidak terdefinisi atau kosong";
} else {
    echo "Variabel 'nonExistentVar' terdefinisi dan tidak kosong";
}
?>
