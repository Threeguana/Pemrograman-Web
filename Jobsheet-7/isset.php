<?php
$data = array("nama" => "Jane", "usia" => 25);
if (isset($data["nama"]) && $data["usia"] >= 18) {
    echo " Nama: " . $data["nama"];
    echo " Nama: " . $data["usia"];
    echo "<br>" . "Anda sudah dewasa";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan";
}
?>
