<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $squery = "SELECT * FROM produk where id=$id";
    $hasil = mysqli_query($koneksi,$squery);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.1/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="bg-gray-200 font-sans">

    <!-- Header -->
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


    <!-- Main Content -->
   <main class="container mx-auto my-8 p-4 bg-white shadow-lg rounded-lg">
   <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    include 'koneksi.php';

                    $tambah = mysqli_query($koneksi, "SELECT * from produk WHERE kategori='Samsung'");
                    while ($produk = mysqli_fetch_array($tambah)) {
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                           
                            <img class="card-img-top w-56 h-56 rounded-lg" src="img/<?= $produk['foto'] ?>" />
                         
                            <div class="card-body p-4">
                                <p class="text-cyan-900"><b><?= $produk['nama'] ?></b></p>
                            
                                <p class="text-cyan-800"><?= $produk['deskripsi'] ?></p>
                                <p class="text-cyan-900"><b>Rp. <?php echo number_format($produk['harga']); ?></b></p>
                                <p class="review-rating">★★★★☆</p>
                                <form method="post">
                                    <div class="form-group col-md-3">
                                        <div class="input-group">
                                            <input class=""type="number" min="1" value="<?= isset($_SESSION['keranjang'][$id]['jumlah']) ? $_SESSION['keranjang'][$id]['jumlah'] : 1 ?>" class="form-control" name="jumlah">
                                        </div>   
                                    </div>
                                </form><br>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                               
                                <a href="beli.php?id=<?= $produk['id'] ?>" class="bg-gray=800 text-cyan-700 py-2 px-4 rounded-lg hover:bg-gray-400 transition">tambah keranjang</a>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
   </main>
        
    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Toko Online. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>
