<?php
include "koneksi.php";

$id= $_GET['id'];

$query = mysqli_query($koneksi,"DELETE FROM tb_user where id=$id");
header('Location: customer.php');
?>