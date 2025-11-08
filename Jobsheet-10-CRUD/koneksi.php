<?php
$koneksi = pg_connect("host=localhost port=5432 dbname=prakwebdb user=postgres password=awsome");

if (!$koneksi) {
    die("koneksi database gagal: " . pg_last_error()); //Call to unknown function: 'pg_last_error'
}
?>
