<?php
include '../koneksi.php';
$db = new Database();
$conn = $db->connect();
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_hp = $_POST['no_hp'];
$tanggal_gabung = $_POST['tanggal_gabung'];

$sql = "INSERT INTO pelanggan (NamaPelanggan, NoHp, TanggalGabung) VALUES ('$nama_pelanggan', '$no_hp', '$tanggal_gabung')";
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
