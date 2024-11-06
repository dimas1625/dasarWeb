<!DOCTYPE html>
<html>
<head>
    <title>Contoh Form dengan PHP</title>
</head>
<body>
    <h2>Form Contoh</h2>
    <form method="POST" action="">
        <label for="buah">Pilih Buah: </label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br><br>

        <label>Pilih Warna Favorit:</label><br>
        <input type="checkbox" name="warna[]" value="merah"> Merah<br>
        <input type="checkbox" name="warna[]" value="biru"> Biru<br>
        <input type="checkbox" name="warna[]" value="hijau"> Hijau<br>

        <br>

        <label>Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan<br>

        <br>

        <input type="submit" value="Submit">
    </form>

    <hr> <!-- Garis pemisah -->

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selectedBuah = $_POST['buah'];

        if (isset($_POST['warna'])) {
            $selectedWarna = $_POST['warna'];
        } else {
            $selectedWarna = [];
        }
        $selectedJenisKelamin = $_POST['jenis_kelamin'];

        // Menampilkan hasil pemilihan
        echo "<h3>Hasil Pemilihan:</h3>";
        echo "<p>Anda memilih buah: <strong>" . htmlspecialchars($selectedBuah) . "</strong></p>";

        if (!empty($selectedWarna)) {
            echo "<p>Warna favorit Anda: <strong>" . implode(", ", array_map('htmlspecialchars', $selectedWarna)) . "</strong></p>";
        } else {
            echo "<p>Anda tidak memilih warna favorit.</p>";
        }

        echo "<p>Jenis kelamin Anda: <strong>" . htmlspecialchars($selectedJenisKelamin) . "</strong></p>";
    }
    ?>
</body>
</html>
