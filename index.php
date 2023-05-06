<?php
session_start();

// Include file koneksi.php
require_once 'koneksi.php';

// Cek apakah pengguna sudah submit form login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    $db = new Database();
    $conn = $db->connect();

    $query = "SELECT * FROM pengguna WHERE namaPengguna='$username' AND Password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $role = mysqli_fetch_array($result);
        $_SESSION['id_role'] = $username;
        header('Location: controller/controller.php');
        exit();
    } else {
        $error_message = "Username atau password salah.";
        echo $error_message;
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* styling untuk login form */
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
    }
    
    .container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
      padding: 20px;
      margin: auto;
      margin-top: 100px;
      width: 300px;
    }
    
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    button {
      background-color: #4CAF50;
      color: #fff;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    
    button:hover {
      background-color: #45a049;
    }
    
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }
    
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }
    
    img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
    .container {
      padding: 16px;
    }
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    
    /* styling untuk responsive layout */
    @media screen and (max-width: 600px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
  </style>
</head>
<body>

  <form action="" method="POST">


    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>

</body>
</html>
