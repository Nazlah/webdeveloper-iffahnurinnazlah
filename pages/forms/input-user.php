
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>GIS</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
 
    <?php require('../dashboards/menu.php'); ?>

  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Form elements</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-10">
          <div class="card-wrapper">
            <!-- HTML5 inputs -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Input user</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form action="../../action/action_tambah_user.php" method="POST" enctype="multipart/form-data">
                
                  <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label form-control-label">Email</label>
                    <div class="col-md-10">
                      <input class="form-control" type="email" name="email" id="yourEmail">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label form-control-label">password</label>
                    <div class="col-md-10">
                      <input class="form-control" type="password" name="password" id="yourPassword" require>
                    </div>
                  </div>
                  <!-- <div class="form-group row">
                    <label for="re-password" class="col-md-2 col-form-label form-control-label">konfirmasi password</label>
                    <div class="col-md-10">
                      <input class="form-control" type="password" name="re-password" id="re-password" placeholder="ulangi password" require>
                    </div>
                  </div> -->

                  <div class="form-group row">
                    <label for="nama" class="col-md-2 col-form-label form-control-label">nama</label>
                    <div class="col-md-10">
                      <input class="form-control" type="nama" name="nama" id="nama">
                    </div>
                  </div>
                 
                  <div class="form-group row">
                      <label for="level" class="col-md-2 col-form-label form-control-label">Level</label>
                      <div class="col-md-10">
                          <select class="form-select" name="level" id="level" aria-label="Default select example">
                            <option selected>Pilih</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="kewirausahan">Kewirausahan</option>
                          </select>
                      </div>
                  </div>

                  
              
                  <div class="row mb-3">
                    <div class="col-sm-10">

                      <input type="submit" value="simpan" class="btn btn-primary" name="submit"></input>

                      <a data-bs-target="#forms-nav" href="../tables/data-produk.php" class="btn btn-primary">Kembali</a>
                    </div>
                  </div>
                </form>
                <!-- <h2> Data Objek Wisata</h2> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
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
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
</body>

</html>