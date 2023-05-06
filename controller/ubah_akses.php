<?php
// Koneksi ke database
require_once "../koneksi.php";
$db = new Database();
$conn = $db->connect();
// Memeriksa apakah ID Pelanggan sudah diterima dari halaman sebelumnya
if(isset($_POST['update'])) {
    $idPelanggan = $_POST['idPelanggan'];
    $namaPelanggan = $_POST['namaPelanggan'];
    $noHp = $_POST['noHp'];
    $tanggalGabung = $_POST['tanggalGabung'];
    $idPenjualan = $_POST['idPenjualan'];

    // Memperbarui data Pelanggan berdasarkan ID Pelanggan
    $result = mysqli_query($mysqli, "UPDATE pelanggan SET NamaPelanggan='$namaPelanggan', NoHp='$noHp', TanggalGabung='$tanggalGabung', idPenjualan='$idPenjualan' WHERE IdPelanggan=$idPelanggan");

    // Redirect kembali ke halaman utama setelah berhasil memperbarui data Pelanggan
    header("Location: index.php");
}

// Menampilkan data Pelanggan yang akan diubah berdasarkan ID Pelanggan
$idPelanggan = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM pelanggan WHERE IdPelanggan=$idPelanggan");

while($row = mysqli_fetch_array($result)) {
    $namaPelanggan = $row['NamaPelanggan'];
    $noHp = $row['NoHp'];
    $tanggalGabung = $row['TanggalGabung'];
    $idPenjualan = $row['idPenjualan'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Pelanggan</title>
</head>
<body>
    <h1>Ubah Pelanggan</h1>
    <form name="update_pelanggan" method="post" action="ubah_pelanggan.php">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input type="text" name="namaPelanggan" value=<?php echo $namaPelanggan;?>></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="noHp" value=<?php echo $noHp;?>></td>
            </tr>
            <tr>
                <td>Tanggal Gabung</td>
                <td><input type="text" name="tanggalGabung" value=<?php echo $tanggalGabung;?>></td>
            </tr>
            <tr>
                <td>ID Penjualan</td>
                <td><input type="text" name="idPenjualan" value=<?php echo $idPenjualan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="idPelanggan" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
