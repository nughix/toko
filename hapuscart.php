<?php
include "koneksi.php";

$id= $_GET['id'];

$query = mysqli_query($koneksi,"DELETE from produk where id=$id");
header('Location: cart.php');
?>