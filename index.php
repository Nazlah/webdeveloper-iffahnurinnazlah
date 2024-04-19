 <!-- =========================================================
 * Argon Dashboard PRO v1.1.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
 * Copyright 2019 Creative Tim (https://www.creative-tim.com)

 * Coded by Creative Tim

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
  -->
  <?php
  session_Start();
  ?>
 <!DOCTYPE html>
 <html>

 <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>GIS</title>
   <!-- Favicon -->
   <link rel="icon" href="./assets/img/brand/favicon.png" type="image/png">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
   <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="./assets/css/argon.css?v=1.1.0" type="text/css">
 </head>

 <body>
   <!-- Navabr -->
   <nav id="navbar-main" class="navbar navbar-horizontal navbar-main navbar-expand-lg navbar-dark bg-primary">
     <div class="container">
       <a class="navbar-brand" href="./index.php">
         <img src="./assets/img/brand/logo.png">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               <a href="../index.php">
                 <img src="./assets/img/brand/blue.png">
               </a>
             </div>
             <div class="col-6 collapse-close">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span></span>
                 <span></span>
               </button>
             </div>
           </div>
         </div>
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a href="index.php" class="nav-link">
               <span class="nav-link-inner--text">HOME</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="login.php" class="nav-link">
               <span class="nav-link-inner--text">Login</span>
             </a>
           </li>
         </ul>
         <hr class="d-lg-none" />
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
           <div class="row align-items-center">
             <div class="col-lg-6">
               <div class="pr-5">
                 <h1 class="display-5 text-white font-weight-bold mb-0">SISTEM INFORMASI GEOGRAFIS UMKM SITUBONDO</h1>

                 <p class="text-white mt-4">GIS menyimpan informasi tentang dunia sebagai kumpulan lapisan tematik yang dapat dihubungkan bersama-sama oleh geografi. Konsep sederhana namun sangat kuat dan serbaguna ini telah terbukti sangat berharga untuk memecahkan banyak masalah dunia nyata dari pelacakan kendaraan pengiriman, untuk merekam detail aplikasi perencanaan, hingga pemodelan sirkulasi atmosfer global.</p>
                 <div class="mt-5">
                   <a href="./login.php" class="btn btn-neutral my-2">login</a>
                   <a href="register.html" class="btn btn-default my-2" hidden>Registrasi</a>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
       </div>
     </div>
     <section class="py-6 pb-9 bg-default">
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white">TENTANG SITUBONDO</h3>
             <p class="lead text-white">
             Kabupaten Situbondo merupakan suatu kabupaten di Jawa Timur, Indonesia dengan pusat pemerintahan dan ibukota terletak di Kecamatan Situbondo. Kota ini terletak di daerah pesisir utara pulau Jawa, dikelilingi oleh perkebunan tebu, tembakau, hutan lindung Baluran dan lokasi usaha perikanan. Dengan letaknya yang strategis, di tengah jalur transportasi darat Jawa Bali, aktivitas yang dipekerjakan perekonomiannya tampak terjaga "hidup". Situbondo mempunyai pelabuhan Panarukan yang terkenal sbg ujung timur dari Perlintasan Raya Pos Anyer-Panarukan di pulau Jawa yang dibangun oleh Daendels pada era kolonial Belanda. 
             </p>
         </div>
       </div>
     </section>  
     
     

   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; 2023 <a  class="font-weight-bold ml-1" target="_blank">TUGAS AHIR IFFAH NURIN NAZLAH</a>
           </div>
         </div>
       </div>
     </div>
   </footer>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
   <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
   <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
   <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
   <!-- Optional JS -->
   <script src="./assets/vendor/onscreen/dist/on-screen.umd.min.js"></script>
   <!-- Argon JS -->
   <script src="./assets/js/argon.js?v=1.1.0"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="./assets/js/demo.min.js"></script>
 </body>

 </html>