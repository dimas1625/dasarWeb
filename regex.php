<?php
$pattern = '/go{1,2}d/'; // Cocokkan "god" (1 'o') atau "good" (2 'o')
$text = 'god is good.';

// Tampilkan teks asli
echo "Teks asli: \"$text\"<br>";

// Cocokkan pola menggunakan preg_match
if (preg_match($pattern, $text, $matches)) {
    echo "Hasil: Pola cocok ditemukan!<br>";
    echo "Pencocokan pertama: " . $matches[0] . "<br>";
} else {
    echo "Hasil: Tidak ada pola yang cocok!<br>";
}

// Garis horizontal sebagai pemisah
echo "<hr>";

// Cocokkan semua pola yang cocok menggunakan preg_match_all
preg_match_all($pattern, $text, $all_matches);
if (!empty($all_matches[0])) {
    echo "Semua pola yang cocok: " . implode(', ', $all_matches[0]) . "<br>";
    echo "Jumlah pola yang cocok: " . count($all_matches[0]) . "<br>";
} else {
    echo "Tidak ada pola tambahan yang ditemukan.<br>";
}

echo "<br>Program selesai.";
?>
