<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman & Email</title>
</head>
<body>
    <h2>Form Input Aman</h2>
    <form method="post" action="">
        <label for="inputText">Masukkan teks:</label>
        <input type="text" name="inputText" id="inputText" required>
        <input type="submit" name="submitText" value="Kirim">
    </form>

    <h2>Form Input Email</h2>
    <form method="post" action="">
        <label for="inputEmail">Masukkan email:</label>
        <input type="text" name="inputEmail" id="inputEmail" required>
        <input type="submit" name="submitEmail" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Form teks biasa
        if (isset($_POST['submitText'])) {
            $input = htmlspecialchars($_POST['inputText'], ENT_QUOTES, 'UTF-8');
            echo "<h3>Hasil input aman:</h3>";
            echo $input;
        }

        // Form email
        if (isset($_POST['submitEmail'])) {
            $email = $_POST['inputEmail'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
                echo "<h3>Email valid:</h3>" . $email;
            } else {
                echo "Email tidak valid. Silakan masukkan email yang benar.";
            }
        }
    }
    ?>
</body>
</html>
