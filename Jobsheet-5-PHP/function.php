<?php
function perkenalan(){
    echo "Assalamualaikum, ";
    echo "perkenalkan, nama saya Andin<br/>";
    echo "Senang berkenalan dengan anda";
}
// memanggil fungsi yg sudah dibuah
perkenalan();
echo "<br>";
perkenalan();

// langkah 4
function kenal($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalakn dengfan anda<br/>";
}
// memanggil fungsi yg sudah dibuat
echo "<hr>";
kenal("Tribuana", "Hi");
echo "<hr>";

$saya = "Andini";
$ucapanSalam = "Selamat tidur";

// memanggil lagi
kenal($saya);
?>
