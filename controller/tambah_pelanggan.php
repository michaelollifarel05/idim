<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
    <style>
        form {
            margin-top: 50px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"], input[type="date"] {
            padding: 5px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 3px;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Tambah Pelanggan</h1>
    <form method="post" action="create_pelanggan_process.php ">
        <label>Nama Pelanggan</label>
        <input type="text" name="nama_pelanggan" required>
        <label>No HP</label>
        <input type="text" name="no_hp" required>
        <label>Tanggal Gabung</label>
        <input type="date" name="tanggal_gabung" required>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
