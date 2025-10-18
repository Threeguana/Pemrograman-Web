<?php
if (isset($_POST['submit'])) {
    $targetDirectory = "images/";

    // Buat folder jika belum ada
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    // Cek apakah ada file diunggah
    if (!empty($_FILES['files']['name'][0])) {
        $totalFiles = count($_FILES['files']['name']);
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileTmp = $_FILES['files']['tmp_name'][$i];
            $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $targetFile = $targetDirectory . basename($fileName);

            // Validasi tipe file
            if (in_array($fileType, $allowedExtensions)) {
                if (move_uploaded_file($fileTmp, $targetFile)) {
                    echo "Gambar $fileName berhasil diunggah.<br>";
                    echo "<img src='$targetFile' width='150' style='margin:5px;'><br>";
                } else {
                    echo "Gagal mengunggah $fileName.<br>";
                }
            } else {
                echo "File $fileName bukan gambar yang valid.<br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
}
?>
