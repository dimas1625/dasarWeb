<?php
// Memproses form hanya jika ada input POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil input email dari form POST
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';

    // Memeriksa apakah input email tidak kosong
    if (!empty($email)) {
        // Memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Jika email valid, lanjutkan dengan pengolahan email yang aman
            echo "<p>Email valid: " . htmlspecialchars($email) . "</p>";
            // Misalnya, lakukan pengolahan lebih lanjut (menyimpan ke database)
        } else {
            // Jika email tidak valid, tampilkan pesan kesalahan
            echo "<p style='color:red;'>Email yang Anda masukkan tidak valid.</p>";
        }
    } else {
        // Jika input kosong, tampilkan pesan kesalahan
        echo "<p style='color:red;'>Harap masukkan email.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Email</title>
</head>
<body>

<h2>Form Validasi Email</h2>
<form method="POST" action="html_aman.php">
    <label for="email">Masukkan Email:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Kirim</button>
</form>

</body>
</html>
