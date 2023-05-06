<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form method="post" action="create_pelanggan_process.php">
        <label>Nama Pelanggan:</label><br>
        <input type="text" name="nama_pelanggan"><br>
        <label>No. HP:</label><br>
        <input type="text" name="no_hp"><br>
        <label>Tanggal Gabung:</label><br>
        <input type="date" name="tanggal_gabung"><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>