<?php
session_start();
include 'koneksi.php';

// Proses login
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cek apakah pengguna ada di dalam database
  $sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Login berhasil
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
  } else {
    // Login gagal
    $error = "Username atau password salah";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>

  <h1>Login</h1>

  <?php if (isset($error)): ?>
    <div><?php echo $error; ?></div>
  <?php endif; ?>

  <form method="post">
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password">
    </div>
    <div>
      <button type="submit">Login</button>
    </div>
  </form>

</body>
</html>
