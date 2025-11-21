<?php
include "koneksi.php";

$aksi = $_GET['aksi'];

if ($aksi == 'tambah') {
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = $db1->prepare("INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp)
                          VALUES (:nama, :jenis_kelamin, :alamat, :no_telp)");
    $sql->execute([
        ':nama' => $nama,
        ':jenis_kelamin' => $jenis_kelamin,
        ':alamat' => $alamat,
        ':no_telp' => $no_telp
    ]);
    header('Location: index.php');
    exit;
}

if ($aksi == 'ubah') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $sql = $db1->prepare("UPDATE anggota
                          SET nama=:nama, jenis_kelamin=:jenis_kelamin, alamat=:alamat, no_telp=:no_telp
                          WHERE id=:id");
    $sql->execute([
        ':nama' => $nama,
        ':jenis_kelamin' => $jenis_kelamin,
        ':alamat' => $alamat,
        ':no_telp' => $no_telp,
        ':id' => $id
    ]);
    header('Location: index.php');
    exit;
}

if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $sql = $db1->prepare("DELETE FROM anggota WHERE id=:id");
    $sql->execute([':id' => $id]);
    header('Location: index.php');
    exit;
}

$db1 = null;
?>
