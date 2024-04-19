<?php
session_start();
?>
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../index.php">
          <img src="../../assets/img/brand/blu.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>

<div class="navbar-inner">
        <!-- Collapse -->
        <div class="navbar-inner">
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link">
                <i class="bi bi-user"></i>
                <span><?php echo strtoupper($_SESSION['level']) ?></span>
              </a>
            </li>
            <?php
              // echo $_SESSION['level'];
              if ($_SESSION['level']== "admin") {
                ?>
              <li class="nav-item">
                <a class="nav-link active" href="../../pages/tables/data-user.php" >
                  <i class="ni ni-circle-08 text-primary"></i>
                  <span class="nav-link-text">Data User</span>
                </a>
              </li>
            
      <!-- end admin  -->
              <?php
              } else {
                if ($_SESSION['level']=="kewirausahaan"){
                  ?>
                
                <li class="nav-item">
                  <a class="nav-link active" href="../../pages/tables/data-umkm.php">
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Umkm</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="../../pages/tables/data-produk.php" >
                    <i class="ni ni-shop text-primary"></i>
                    <span class="nav-link-text">Laporan Produk</span>
                  </a>
                </li>
                <?php
                }else{
                ?>
               
                  <li class="nav-item">
                    <a class="nav-link active" href="../../pages/tables/data-produk.php" >
                      <i class="ni ni-shop text-primary"></i>
                      <span class="nav-link-text">Produk</span>
                    </a>
                  </li>
              
              <?php
              }
            }
              ?>

              <!-- end admin  -->
            </ul>
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
          </div>
        </div>
      </div>

      </div>
  </nav>