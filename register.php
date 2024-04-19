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
//  session_start();
//  include"connection.php";
//  if (isset($_POST['login'])) {

//   $username=$_POST['username'];
//   $password=$_POST['password'];

//   $query="select *form user where username='$username' and password= '$password'";
//   $result=$koneksi->query($query);

//   $cek=mysqli_num_rows($result);

//   if($cek >0) {
    
//   }

//  }
 ?>
<!DOCTYPE html>
<html lang="en">

<?php require('./view/head.php'); ?>


<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
        <img src="./assets/img/brand/white.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="../../pages/dashboards/dashboard.html">
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
            <a href="./login.php" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.php" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
        </ul>
        <hr class="d-lg-none" />
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">     
        
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Silahkan Registrasi Terlebih Dahulu</h5>
                  </div>

                  <form action="action/action-tambah-user.php" method="POST" class="row g-3 needs-validation" action="action/action-login.php" method="POST" novalidate>

                    <div class="col-12">
                      <label for="email" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <input type="email" name="email" class="form-control" id="yourEmail" required>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                    </div>

                    <div class="col-12">
                      <label for="re-password" class="form-label">Konfirmasi Password</label>
                      <input type="password" name="re-password" class="form-control" id="re-password" placeholder="ulangi password" required>
                    </div>

                    <div class="col-12">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="nama" name="nama" class="form-control" id="yourNama" required>
                    </div>

                    <div class="form-group row">
                      <label for="level" class="col-md-2 col-form-label form-control-label">Level</label>
                      <div class="col-md-10">
                          <select class="form-select" name="level" id="level" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="User">User</option>
                            <option value="Admin">Admin</option>
                          </select>
                      </div>
                  </div>

                </div>
                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit">Simpan</button>
                </div>
                </br>

                </form>

              </div>
            </div>
          </div>
        </div>
    </div>

    </section>
    </div>
    <!-- Page content -->
    <main>
    <div class="container">

      
  </div>
</main>

  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
            </li>
          </ul>
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
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="./assets/js/demo.min.js"></script>
</body>

</html>

