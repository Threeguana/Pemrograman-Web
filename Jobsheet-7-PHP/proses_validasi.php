<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
    $password = $_POST["password"];
    $errors = [];

    if (empty($nama)) $errors[] = "Nama harus diisi.";
    if (empty($email)) $errors[] = "Email harus diisi.";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Format email tidak valid.";
    if (strlen($password) < 8) $errors[] = "Password minimal 8 karakter.";

    if (!empty($errors)) {
        foreach ($errors as $error) echo $error . "<br>";
    } else {
        echo "Data berhasil dikirim:<br>";
        echo "Nama: $nama<br>Email: $email<br>Password aman diterima.";
    }
}
?>
