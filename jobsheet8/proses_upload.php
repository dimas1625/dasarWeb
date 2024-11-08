<?php
// Lokasi penyimpanan file yang diunggah
$targetDirectory = "documents/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Cek apakah ada file yang diunggah
if (isset($_FILES['files']['name'][0]) && $_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png");

    // Batasi pengunggahan hingga maksimal 2 file
    if ($totalFiles > 2) {
        echo "Hanya bisa mengunggah maksimal 2 file.<br>";
    } else {
        // Loop untuk setiap file yang diunggah
        for ($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileTmpName = $_FILES['files']['tmp_name'][$i];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $targetFile = $targetDirectory . $fileName;

            // Validasi tipe file
            if (in_array($fileExtension, $allowedExtensions)) {
                // Pindahkan file yang diunggah ke direktori penyimpanan
                if (move_uploaded_file($fileTmpName, $targetFile)) {
                    echo "File $fileName berhasil diunggah.<br>";
                } else {
                    echo "Gagal mengunggah file $fileName.<br>";
                }
            } else {
                echo "Format file $fileName tidak didukung.<br>";
            }
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
