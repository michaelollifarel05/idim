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
    </style>
</head>
<body>
    <h1>Dashboard K3</h1>

    <h2>Tabel Hak Akses</h2>
    <table>
        <tr>
            <th>ID Akses</th>
            <th>Nama Akses</th>
            <th>Keterangan</th>
        </tr>
        <?php if (mysqli_num_rows($akses) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($akses)): ?>
                <tr>
                    <td><?php echo $row['idAkses']; ?></td>
                    <td><?php echo $row['NamaAkses']; ?></td>
                    <td><?php echo $row['Keterangan']; ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="3">Tidak ada data</td>
            </tr>
        <?php endif; ?>
    </table>

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
</body>
</html>