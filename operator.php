<?php
// Jumlah total kursi di restoran
$total_kursi = 45;

// Jumlah kursi yang sudah ditempati
$kursi_ditempati = 28;

// Menghitung jumlah kursi yang masih kosong
$kursi_kosong = $total_kursi - $kursi_ditempati;

// Menghitung persentase kursi yang kosong
$persentase_kursi_kosong = ($kursi_kosong / $total_kursi) * 100;

// Menampilkan hasil
echo "Persentase kursi yang masih kosong adalah " . number_format($persentase_kursi_kosong, 2) . "%";
?>
