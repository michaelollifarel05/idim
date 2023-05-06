

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard K3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }   
/*         .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .button1 {background-color: #4CAF50;} */

    </style>
</head>
<body>
    <h1>Dashboard Kel 3</h1>

    <h2>Tabel Barang</h2>
    <table>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Satuan</th>
            <th>ID Pengguna</th>
        </tr>
        <?php if (mysqli_num_rows($barang) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($barang)): ?>
                <tr>
                    <td><?php echo $row['idBarang']; ?></td>
                    <td><?php echo $row['NamaBarang']; ?></td>
                    <td><?php echo $row['Keterangan']; ?></td>
                    <td><?php echo $row['Satuan']; ?></td>
                    <td><?php echo $row['idPengguna']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>

    <h2>Tabel Pelanggan</h2>
    <table>
        <tr>
            <th>ID Pelanggan</th>
            <th>Nama Pelanggan</th>
            <th>No Handphone</th>
            <th>Tanggal Gabung</th>
            <th>ID Penjualan</th>
        </tr>
        <?php if (mysqli_num_rows($pelanggan) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($pelanggan)): ?>
                <tr>
                    <td><?php echo $row['IdPelanggan']; ?></td>
                    <td><?php echo $row['NamaPelanggan']; ?></td>
                    <td><?php echo $row['NoHp']; ?></td>
                    <td><?php echo $row['TanggalGabung']; ?></td>
                    <td><?php echo $row['idPenjualan']; ?></td>
                    <td>
                    <a href="ubah_akses.php?id=<?php echo $row['IdPelanggan']; ?>" class="button">Ubah</a>
                    <a href="hapus_akses.php?id=<?php echo $row['IdPelanggan']; ?>" class="button" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>    
    <a href="tambah_pelanggan.php" class="button">Tambah pelanggan</a>
</body>
</html>
