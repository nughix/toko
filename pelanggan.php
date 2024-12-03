<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
  
  $nama = $_POST['nama'];
  $username = $_POST['username'];    
  $email = $_POST['email'];
  $password = $_POST['password'];
  $no_hp = $_POST['no_hp'];
  $alamat =$_POST['alamat'];
  if ($nama && $email && $username && $password) {
  
  $simpan = mysqli_query($koneksi,"INSERT INTO tb_user(nama,email,username,password,hp,alamat,role)
   VALUES('$nama','$email','$username','$password','$no_hp','$alamat','pelanggan')" );
    
    if ($simpan) {
    header('location: login.php');
    }

  }
}
?>
<!DOCTYPE html>
<html>
  <title>Sign Up Form</title>
  <head>
<style>
  font-family: sans-serif;
  body {
}

.container {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ddd;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="number"]{
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  border: 1px solid #ddd;
  box-sizing: border-box;
}

input[type="checkbox"] {
  margin-right: 5px;
}

button {
  background-color: #4CAF50;
  color: #ffff;
  padding: 10px 20px;
  margin: 10px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.9;
}

a {
  color: #4CAF50;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
</style>
</head>
<body>
<div class="container">
<h2>Sign Up</h2>
<form method="POST" enctype="multipart/form-data">
  <div>
    <label for="name"> Name:</label>
    <input type="text" id="name" name="nama" placeholder="Name...">
  </div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Email addess...">
  </div>
  <div>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" placeholder="Username...">
  </div>
  <div>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="*********">
  </div>
  <div>
    <label for="number">no hp:</label>
    <input type="number" id="number" name="no_hp" placeholder="no hp....">
  </div>
  <div>
    <label for="alamat">alamat:</label>
    <input type="text" id="alamat" name="alamat" placeholder="alamat...">
  </div>
  <div>
    <input type="checkbox" id="agree-terms" name="agree-terms">
    <label for="agree-terms">I agree to the Terms of User</label>
  </div>
  <button type="submit" name="submit">Sign Up</button>
  <a href="#">Sign in</a>
</form>
</div>
</body>
</html>