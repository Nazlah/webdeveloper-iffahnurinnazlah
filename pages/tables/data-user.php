<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
 <?php require_once '../../action/connection.php';?>
<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>gis</title>
  <!-- Favicon -->
  <link rel="icon" href="../../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="../../assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../../assets/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  
      <?php require('../dashboards/menu.php'); ?>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center ml-auto ml-md-0">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../../assets/img/theme/profile.png">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <!-- <span class="mb-0 text-sm  font-weight-bold">John Snow</span> -->
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome <?php echo $_SESSION['nama']?> !</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="../dashboards/logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Data User</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="../forms/input-user.php" class="btn btn-sm btn-neutral">Tambah</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                  $query= "SELECT *FROM tb_user";
                  $result = mysqli_query($db, $query);
                  $i=1;
                  //forech
                  foreach ($result as $data) { ?>
                    <tr>
                        <td><?php echo $i++ ?> </td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td><?php echo $data['level'] ?></td>
                        <td class="table-actions">
                         <a href="../forms/edit-user.php?id=<?php echo $data['id_user'];?>" class="table-action" data-toggle="tooltip" data-original-title="Edit Data">
                        <i class="fas fa-user-edit"></i>
                        </a>
                        
                        <a href="../dashboards/hapus-user.php?id=<?php echo $data['id_user'];?>" class="table-action table-action-delete" data-toggle="tooltip" data-original-title="Delete Data">
                        <i class="fas fa-trash"></i>
                      </a>
                    </td>
                    

                            
                     
                        
                 <?php
                  }
                 ?>
                    
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../../assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="../../assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="../../assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="../../assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
  <!-- Argon JS -->
  <script src="../../assets/js/argon.js?v=1.1.0"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="../../assets/js/demo.min.js"></script>
</body>

</html>