<?php
include '../koneksi.php';
$db = new Database();
$conn = $db->connect();
$id_penjualan = $_POST['id_penjualan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_hp = $_POST['no_hp'];
$tanggal_gabung = $_POST['tanggal_gabung'];

$sql = "INSERT INTO pelanggan (idPenjualan, NamaPelanggan, NoHp, TanggalGabung) VALUES ($id_penjualan, '$nama_pelanggan', '$no_hp', '$tanggal_gabung')";
if (mysqli_query($conn, $sql)) {
    header("Location: controller.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
