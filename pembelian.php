<?php
// Koneksi ke database
$conn = mysqli_connect('localhost', 'username', 'password', 'nama_database');

// Menambah data pembelian
if (isset($_POST['submit'])) {
  $tanggal = $_POST['tanggal'];
  $supplier = $_POST['supplier'];
  $total_harga = $_POST['total_harga'];

  $query = "INSERT INTO pembelian (tanggal, supplier, total_harga) VALUES ('$tanggal', '$supplier', '$total_harga')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header('Location: dashboard.php');
  } else {
    echo 'Error: ' . mysqli_error($conn);
  }
}

// Menampilkan form untuk menambah data pembelian
echo '<h3>Tambah Pembelian</h3>';
echo '<form method="post">';
echo '<label>Tanggal:</label><input type="date" name="tanggal">';
echo '<label>Supplier:</label><input type="text" name="supplier">';
echo '<label>Total Harga:</label><input type="number" name="total_harga">';
echo '<input type="submit" name="submit" value="Tambah">';
echo '</form>';

// Menghapus data pembelian
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  $query = "DELETE FROM pembelian WHERE id='$id'";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header('Location: dashboard.php');
  } else {
    echo 'Error: ' . mysqli_error($conn);
  }
}

// Menampilkan data pembelian dalam bentuk tabel beserta tombol edit dan hapus
$query = "SELECT * FROM pembelian";
$result = mysqli_query($conn, $query);

echo '<h3>Daftar Pembelian</h3>';
echo '<table>';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Tanggal</th>';
echo '<th>Supplier</th>';
echo '<th>Total Harga</th>';
echo '<th>Aksi</th>';
echo '</tr>';

while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>';
  echo '<td>' . $row['id'] . '</td>';
  echo '<td>' . $row['tanggal'] . '</td>';
  echo '<td>' . $row['supplier'] . '</td>';
  echo '<td>' . $row['total_harga'] . '</td>';
  echo '<td><a href="edit_pembelian.php?id=' . $row['id'] . '">Edit</a> | <a href="dashboard.php?delete=' . $row['id'] . '">Hapus</a></td>';
  echo '</tr>';
}

echo '</table>';
?>
