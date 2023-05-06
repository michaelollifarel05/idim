<html>
<head>
<title>Dashboard Data Penjualan Produk</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<h1>Tabel 1</h1>
<table class="data-table">
<caption class="title">Data Penjualan</caption>
<thead>
<tr>
<th>NO</th>
<th>PEMBELI</th>
<th>BARANG</th>
<th>TANGGAL</th>
<th>HARGA</th>
</tr>
</thead>
<tbody>
<?php
include('koneksi.php');
$no = 1;
$bulan = array (1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
while ($row = mysqli_fetch_array($query))
{
$tgl = explode('-', $row['tanggal']);
$harga = $row['harga'] == 0 ? '' : number_format($row['harga'], 0, ',', '.');
echo '<tr>
<td>'.$no.'</td>
<td>'.$row['pembeli'].'</td>
<td>'.$row['barang'].'</td>
<td>'.$tgl[2] . ' ' . $bulan[(int)$tgl[1]] . ' ' . $tgl[0] . '</td>
<td>'.$harga.'</td>
</tr>';
$no++;
}?>
</tbody>

</table>
</body>
</html>