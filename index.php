<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>XANNN Phone</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">


    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: 1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      .header{
        position: fixed;
        width: 100%;
        top: 0;
        right: 0;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 10%;
      }
      .header.sticky{
        background: #ffff;
        padding: 16px 10%;
        box-shadow: 0px 0px 10px rgb(0,0,0/10%);
      }
      .center-text h2{
        color: #111;
        font-size: 28px;
        text-transform: capitalize;
        text-align: center;
        margin-bottom: 30px;
      }
      .center-text span{
        color: blue;
      }
      .produk{
        display: grid;
        grid-template-columns: repeat(auto-fit,minmax(260px,auto));
        gap: 2rem;
        border: 1px;
        border-color: black;
      }
      .row{
        position: relative;
        transition: all .40s;
        border: 1px;
        border-color: blue;
      }
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
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
     <nav class="bg-cyan-800 shadow-md">
        <div class="max-w-7xl mx-auto px-5 sm:px-7 lg:px-7">
          <div class="flex justify-between h-16">
            <div class="flex items-center">
              <p class="text-xl font-semibold text-pink-900">XANN store</p>
                </div>
                <div class="flex space-x-8 items-center">
                    <a href="#" class="text-pink-900 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Home</a>
                    <a href="iphone.php" class="text-pink-900 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Produk</a>
                    <a href="#" class="text-pink-900 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Services</a>
                    <a href="#" class="text-pink-900 hover:text-blue-500 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="#" class="text-pink-900 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-1.7 8.7a2 2 0 002 2.3h10.6a2 2 0 002-2.3L17 13M16 5a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </a>
                    <a href="#" class="text-pink-900 hover:text-blue-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 19.121A4.002 4.002 0 019 17h6a4.002 4.002 0 013.879 2.121M12 11a4 4 0 100-8 4 4 0 000 8z"/>
                        </svg>
                    </a>
                </div>
            </div>
          </div>
        </nav>
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="Store ROG.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="samsung-banner.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="banner44.jpg" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="iphone.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal text-red-800">Iphone</h2>
        <div class="heart-icon">
          <i class="bx bx-heart"></i>
        </div>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="samsung.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal text-red-800">Samsung</h2>
        <div class="heart-icon">
          <i class="bx bx-heart"></i>
        </div>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="ROG.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h2 class="fw-normal text-red-900">Asus ROG</h2>
        <div class="heart-icon">
          <i class="bx bx-heart"></i>
        </div>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <section class="trending-produk" id="ternding">
        <div class="center-text">
          <h2>HP trending <span>Produk</span></h2>
        </div>
  
        <div class="produk">
            <div class="row">
              <img src="HP Iphone.jpg" alt="" />
              <div class="produk-text">
                <h5>NEW</h5>
              </div>
              <div class="heart-icon">
                <i class="bx bx-heart"></i>
              </div>
              <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bxs-star-half"></i>
              </div>
              <div class="price">
                <h4 class="text-rose-900">Iphone 15 PRO MAX</h4>
                <p>$99-$199</p>
              </div>
            </div>
  
            <div class="row">
              <img src="HP Samsung.jpg" alt="" />
              <div class="produk-text">
                <h5>NEW</h5>
              </div>
              <div class="heart-icon">
                <i class="bx bx-heart"></i>
              </div>
              <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bxs-star-half"></i>
              </div>
              <div class="price">
                <h4 class="text-rose-800">Samsung S24 ULTRA</h4>
                <p>$99-$199</p>
              </div>
            </div>
  
            <div class="row">
              <img src="img/ROG6.jpg" alt="" />
              <div class="produk-text">
                <h5>NEW</h5>
              </div>
              <div class="heart-icon">
                <i class="bx bx-heart"></i>
              </div>
              <div class="rating">
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bx-star"></i>
                <i class="bx bxs-star-half"></i>
              </div>
              <div class="price">
                <h4 class="text-rose-700  ">Asus ROG 8</h4>
                <p>$99-$199</p>
              </div>
            </div>
          </div>
      </section>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-cyan-700">SAMSUNG S24 ULTRA <span class="text-body-secondary"></span></h2>
        <p class="lead">mau harga yang murah tapi kualitas bagus beli Samsung S24 Ultra</p>
      </div>
      <div class="col-md-5">
        <img src="HP Samsung.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1 text-cyan-800">ASUS ROG Phone 8 <span class="text-body-secondary"></span></h2>
        <p class="lead">mau HP yang bisa bermain game berat atau menjalankan aplikasi yang berat juga beli Asus ROG Phone 8</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="HP ROG 2.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1 text-cyan-900">IPHONE 15 PRO MAX <span class="text-body-secondary">.</span></h2>
        <p class="lead">mau HP yang masuk ke style anda beli HP Iphone 15 PRO MAX memiliki gaya yang elegan dan terlihat seperti HP mahal</p>
      </div>
      <div class="col-md-5">
        <img src="HP Iphone.jpg" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"/><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text></svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2024 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    const toggleSidebar = () => document.body.classList.toggle("open");
  </script>

    </body>
</html>
