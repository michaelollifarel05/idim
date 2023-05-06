<?php
$servername = "localhost"; // ganti dengan nama server Anda
$username = "username"; // ganti dengan nama pengguna database Anda
$password = "password"; // ganti dengan kata sandi database Anda
$dbname = "nama_database"; // ganti dengan nama database Anda

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

$sql = 'SELECT *
FROM penjualan'; // Silakan Anda ubah ‘penjualan’ dengan nama tabel yang Anda ingin tampilkan.

$query = mysqli_query($conn, $sql);

if (!$query) {
die ('SQL Error: ' . mysqli_error($conn));
}
?>
