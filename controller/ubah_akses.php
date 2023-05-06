<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "username", "password", "nama_database");

// Memeriksa apakah parameter ID telah diberikan
if (!isset($_GET['id'])) {
    header("Location: dashboard.php");
}

$id = $_GET['id'];

// Memeriksa apakah form telah disubmit
if (isset($_POST['submit'])) {
    $nama_akses = $_POST['nama_akses'];
    $keterangan = $_POST['keterangan'];

    // Update data pada database
    $sql = "UPDATE akses SET NamaAkses = '$nama_akses', Keterangan = '$keterangan' WHERE idAkses = '$id'";
    mysqli_query($conn, $sql);

    // Redirect ke halaman dashboard setelah berhasil mengubah data
    header("Location: dashboard.php");
}

// Mengambil data hak akses dari database berdasarkan ID
$sql = "SELECT * FROM akses WHERE idAkses = '$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    // Redirect ke halaman dashboard jika data tidak ditemukan
    header("Location: dashboard.php");
}

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Hak Akses</title>
</head>
<body>
    <h1>Ubah Hak Akses</h1>

    <form method="post">
        <label>Nama Akses</label>
        <input type="text" name="nama_akses" value="<?php echo $row['NamaAkses']; ?>">

        <label>Keterangan</label>
        <textarea name="keterangan"><?php echo $row['Keterangan']; ?></textarea>

        <button type="submit" name="submit">Simpan</button>
    </form>
</body>
</html>