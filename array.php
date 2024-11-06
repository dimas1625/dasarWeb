<?php
$siswa = [
    ["nama" => "Alice", "nilai" => 85],
    ["nama" => "Bob", "nilai" => 92],
    ["nama" => "Charlie", "nilai" => 78],
    ["nama" => "David", "nilai" => 64],
    ["nama" => "Eva", "nilai" => 90]
];

$totalNilai = 0;
$jumlahSiswa = count($siswa);

foreach ($siswa as $data) {
    $totalNilai += $data["nilai"];
}

$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . $rataRata . "\n";
echo "Siswa yang mendapat nilai di atas rata-rata:\n";

foreach ($siswa as $data) {
    if ($data["nilai"] > $rataRata) {
        echo $data["nama"] . " - Nilai: " . $data["nilai"] . "\n";
    }
}
?>
