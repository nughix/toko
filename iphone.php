<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>XANN Store</title>
        <link rel="stylesheet" href="../build.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <style>
     .nav-icon{
        display: flex;
        align-items: center;
      }
      .nav-icon i{
        margin-right: 20px;
        color: #712cf9;
        font-size: 25px;
        font-weight: 400;
        transition: all .42s ease;
      }
      .nav-icon i:hover{
        transform: scale(1.1);
        color: crimson;
      }
  </style>
</head>
    </head>
    <body>
    <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    

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
    <!-- Header-->
                <header class="bg-cyan-900 py-5">
                    <div class="container px-4 px-lg-5 my-5">
                        <div class="text-center text-white">
                            <h1 class="display-4 fw-bolder">XANN Store</h1>
                            <p class="lead fw-normal text-white-50 mb-0">welcome to XANN Store</p>
                        </div>
                    </div>
                </header>
                <!-- Section-->
                <section class="py-5">
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php
                            include 'koneksi.php';

                            $simpan = mysqli_query($koneksi,"SELECT * FROM produk WHERE kategori='iphone'");
                            while ($produk = mysqli_fetch_array($simpan)){
                            ?>
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="./img/<?= $produk['foto']?>" >

                                    <div class="card-body p-4">
                                        <p class="text-center"><b><?=  $produk['nama'] ?></b></p>
                                        <p class="text-rose-800 m-7">Rp:<?=  $produk['harga'] ?></p>
                                        <p class="text-rose-900 m-7"><?=  $produk['deskripsi'] ?></p>
                                        <div class="card-footer p-4 pt-0 bg-transparent">
                                        <div class="text-center"><a href="detail.php?id=<?php echo $produk['id'] ?>" class="btn btn-outline-dark mt-auto">detail</a></div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php
                            include 'koneksi.php';

                            $simpan = mysqli_query($koneksi,"SELECT * FROM produk WHERE kategori='Samsung'");
                            while ($produk = mysqli_fetch_array($simpan)){
                            ?>
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="./img/<?= $produk['foto']?>" >

                                    <div class="card-body p-4">
                                        <p class="text-center"><b><?=  $produk['nama'] ?></b></p>
                                        <p class="text-orange-900 m-7"> Rp:<?=  $produk['harga'] ?></p>
                                        <p class="text-orange-800 m-7"><?=  $produk['deskripsi'] ?></p>
                                        <div class="card-footer p-4 pt-0 bg-transparent">
                                        <div class="text-center"><a href="detail.php?id=<?php echo $produk['id'] ?>" class="btn btn-outline-dark mt-auto">detail</a></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="container px-4 px-lg-5 mt-5">
                        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <?php
                            include 'koneksi.php';

                            $simpan = mysqli_query($koneksi,"SELECT * FROM produk WHERE kategori='ROG'");
                            while ($produk = mysqli_fetch_array($simpan)){
                            ?>
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <img class="card-img-top" src="./img/<?= $produk['foto']?>" >

                                    <div class="card-body p-4">
                                        <p class="text-center"><b><?=  $produk['nama'] ?></b></p>
                                        <p class="text-rose-900 m-7">Rp:<?=  $produk['harga'] ?></p>
                                        <p class="text-rose-800 m-7"><?=  $produk['deskripsi'] ?></p>
                                        <div class="card-footer p-4 pt-0 bg-transparent">
                                        <div class="text-center"><a href="detail.php?id=<?php echo $produk['id'] ?>" class="btn btn-outline-dark mt-auto">detail</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

