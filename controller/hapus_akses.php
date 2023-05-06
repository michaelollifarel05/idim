<?php
// Panggil file koneksi.php agar bisa terhubung ke database
require_once "koneksi.php";

// Cek apakah parameter idAkses sudah dikirimkan
if (isset($_GET['id'])) {
    // Simpan idAkses ke dalam variabel
    $idAkses = $_GET['id'];

    // Hapus data akses dari tabel Akses berdasarkan idAkses
    $query = "DELETE FROM hakakses WHERE idAkses = '$idAkses'";
    $result = mysqli_query($koneksi, $query);

    // Jika query berhasil dijalankan, redirect ke halaman dashboard
    if ($result) {
        header("Location: dashboard.php");
    } else {
        echo "Gagal menghapus data akses";
    }
} else {
    echo "ID akses tidak ditemukan";
}
?>
