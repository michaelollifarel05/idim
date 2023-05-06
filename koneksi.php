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
?>
