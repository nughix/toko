<?php
include "koneksi.php";
session_start();

if(!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}
$total = 0;

$id_user = $_SESSION['id_user'];

if(isset($id_user)){
    if (isset($id_user))
    if (isset($_POST['add'])){
        
        if(isset($_SESSION['cart'])){
            $item_array_id = array_column($_SESSION['cart'], 'id');
            if(!in_array($_GET["id"], $item_array_id)){
                $count = count($_SESSION['cart']);
                $item_array = array(
                    'id' => $_GET['id'],
                    'nama' => $_POST['nama'],
                    'harga' => $_POST['harga'],
                    'foto' => $_POST['foto'],
                    'jumlah' => $_POST['jumlah'],
                );

                $_SESSION['cart'] [$count] = $item_array;
                echo "<script>
                alert('berhasil dimasukkan ke keranjang');
                </script>";
            }else {
                echo"<script>
                alert('sudah ada di keranjang');
                </script>";
         }
        }else{
            $item_array = array(
                'id' => $_GET['id'],
                'nama' => $_POST['nama'],
                'harga' => $_POST['harga'],
                'foto' => $_POST['foto'],
                'jumlah' => $_POST['jumlah'],
            );

            $_SESSION['cart'] [0] = $item_array;
            echo "<script>
            alert('berhasil dimasukkan ke keranjang');
            </script>";
        }
    }
    if(isset($_GET['aksi'])){
        if($_GET['aksi'] == 'hapus'){
            foreach($_SESSION['cart'] as $key => $value){
                if($value['id'] == $_GET['id']){
                    unset($_SESSION['cart'] [$key]);
                    echo"<script>alert('produk dihapus dari keranjang');</script>";
                    echo"<script>window.location = 'keranjang.php';</script>";
                }
            }
        }else if ($_GET['aksi'] == 'beli'){
            foreach($_SESSION['cart'] as $key => $value){
                $total = $total + ($value["jumlah"] * $value['harga']);
            }

            $query = mysqli_query($koneksi, "INSERT INTO tb_transaksi(tanggal,id_pelanggan,total_harga) VALUES ('". date("Y-m-d") . "','$id_user','$total')");
            $id_transaksi = mysqli_insert_id($koneksi);
            
            foreach($_SESSION['cart'] as $key => $value){
                $id_produk = $value['id'];
                $jumlah = $value['jumlah'];
                $sql = "INSERT INTO tb_detail(id_transaksi,id_produk,jumlah) VALUES ('$id_transaksi','$id_produk','$jumlah')";
                $res = mysqli_query($koneksi, $sql);

                if ($res > 0){
                    unset($_SESSION['cart']);

                    echo "<script>
                    alert('terimakasih sudah berbelanja');
                    </script>";

                    echo "<script>
                    window.location = 'nota.php?id=". $id_transaksi."';
                    </script>";
                }
            }
        }
    }
}else{
    echo "<script>
    alert('login dulu');
    </script>";
    echo "<script>
   document.location.href = 'login.php';
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Keranjang Belanja</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
<script src="https://cdn.tailwindcss.com"></script>
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<nav class="bg-indigo-950 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <p class="text-xl font-semibold text-rose-600">XANN store</p>
                </div>
                <div class="flex space-x-8 items-center">
                    <a href="index.php" class="text-rose-600 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="#" class="text-rose-600 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">About</a>
                    <a href="#" class="text-rose-600 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="#" class="text-rose-600 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="cart.php" class="text-rose-600 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.7 8.7a2 2 0 002 2.3h10.6a2 2 0 002-2.3L17 13M16 5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-rose-600 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 19.121A4.002 4.002 0 019 17h6a4.002 4.002 0 013.879 2.121M12 11a4 4 0 100-8 4 4 0 000 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

   
    <main class="container mx-auto my-8 p-4 bg black shadow-lg rounded-lh">
        <h2 class="text 2x1 font-semibold mb-4">Keranjang Belanja</h2>
        <div class="space-y-4">
            <?php
                if (!empty($_SESSION['cart'])) {    
                    foreach($_SESSION['cart'] as $value){ ?>
                <div class="min-w-full bg-slate-50 flex items-center gap-4 p-4 justify-between">
                    <div class="flex items-center gap-4">
                        <img src="img/<?php echo $value['foto']?>" alt="" height="200px">
                        <div class="flex flex-col gap-1">
                        <h1 class="font-bold text-x1"><?php echo $value['nama']?></h1>
                        <p>jumlah beli : <span><?php echo $value['jumlah']?></span></p>
                        <p class="text-lg font-bold text yellow-500"><?php echo number_format($value['harga'] * $value['jumlah']) ?></p>
                        </div>
                    </div>

                    <form action="" method="POST">
                        <a name="hapus" href="keranjang.php?aksi=hapus&id=<?php echo $value['id']?>" class="btn btn-primary btn-sm">hapus</a>
                    </form>
                </div>        
                <?php
                    
                    }
                 ?>
                <?php } ?>
        </div>
        <div class="flex justify-between font=bold border-t pt-4 mt-4">
            <?php 
            foreach($_SESSION['cart'] as $value){
                $total = $total + ($value['harga'] = $value['jumlah']);
            }  ?>
            <span>Total <?php echo number_format($total) ?></span>
            <br>
            <?php 
            foreach($_SESSION['cart'] as $value){
                $total = $total + ($value['harga'] * $value['jumlah']);
            }  ?>
            <span>Total harga: <?php echo number_format($total)?></span>
            </br>
        </div>

        <div class="mt-8">
            <form action="" method="POST">
            <a href="iphone
            .php" class="btn btn-primary btn-sm ">kembali</a>
                <a href="cart.php?aksi=beli" class="btn btn-primary btn-sm ">Checkout</a>
            </form>
        </div>
    </main>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>
</html>