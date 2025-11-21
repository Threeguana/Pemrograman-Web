<?php
if (isset($_POST['submit'])) {
    $targetDirectory = "images/";

    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    if (!empty($_FILES['files']['name'][0])) {
        $totalFiles = count($_FILES['files']['name']);
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = basename($_FILES['files']['name'][$i]);
            $fileTmp = $_FILES['files']['tmp_name'][$i];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $targetFile = $targetDirectory . uniqid("img_", true) . "." . $fileExt;

            if (in_array($fileExt, $allowedExtensions)) {

                $check = getimagesize($fileTmp);
                if ($check !== false) {
                    if (move_uploaded_file($fileTmp, $targetFile)) {
                        echo "Gambar $fileName berhasil diunggah.<br>";
                        echo "<img src='$targetFile' width='150' style='margin:5px;'><br>";
                    } else {
                        echo "Gagal mengunggah $fileName.<br>";
                    }
                } else {
                    echo "$fileName bukan file gambar valid (bukan MIME image).<br>";
                }
            } else {
                echo "File $fileName memiliki ekstensi tidak diperbolehkan.<br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah.";
    }
}
?>
