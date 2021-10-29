<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>beranda/komdisma">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Beranda</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>akun" aria-expanded="false">
        <i class="icon-head menu-icon"></i>
        <span class="menu-title">Akun</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url(); ?>profil" aria-expanded="false">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">Profil</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="proker.php" aria-expanded="false">
        <i class="icon-paper menu-icon"></i>
        <span class="menu-title">Program Kerja</span>
      </a>
    </li>
  </ul>
</nav>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h2 class="font-weight-bold">Selamat Datang</h2>
            <h6 class="font-weight-normal mb-0">di Sistem Informasi <span class="text-primary">Ormawa Sekolah Vokasi IPB</span></h6>
          </div>
          <div class="col-12 col-xl-4">
            <div class="justify-content-end d-flex">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-sm btn-light bg-white">
                  <i class="mdi mdi-calendar">
                    <p id="date"></p>
                    <script>
                      document.getElementById("date").innerHTML = Date();
                    </script>

                  </i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg card-body">
          <img src="<?= base_url('assets'); ?>/images/svipb.jpg">
        </div>
      </div>
      <div class="col-md-6 grid-margin transparent">
        <div class="row">
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-tale">
              <div class="card-body">
                <p class="mb-4">Jumlah Ormawa yang ada</p>
                <p class="fs-30 mb-2">17</p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 mb-4 stretch-card transparent">
            <div class="card card-dark-blue">
              <div class="card-body">
                <p class="mb-4">Jumlah Mahasiswa yang tergabung</p>
                <p class="fs-30 mb-2">432</p>
                <p></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
            <div class="card card-light-blue">
              <div class="card-body">
                <p class="mb-4">Jumlah Program Kerja yang sedang berlangsung</p>
                <p class="fs-30 mb-2">3</p>
                <p></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 stretch-card transparent">
            <div class="card card-light-danger">
              <div class="card-body">
                <p class="mb-4">Jumlah Program Kerja yang akan datang</p>
                <p class="fs-30 mb-2">7</p>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Program Kerja</p>
            <div class="row">
              <div class="col-12">
                <div>
                  <?php

                  include "assets/spreadsheet/panggildataproker.php";

                  ?>
                  <table class="table">

                    <thead>
                      <tr>
                        <th scope="col">Nama Ormawa</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Banyak Proker</th>
                      </tr>
                    </thead>
                    <tbody>

                      <?php

                      $prk = new proker();

                      $i = 1;

                      foreach ($prk->read() as $m) :
                      ?>

                        <tr>
                          <td><?php echo $m->nama_ormawa; ?></td>
                          <td><?php echo $m->bulan; ?></td>
                          <td><?php echo $m->banyak_proker; ?></td>
                        </tr>

                      <?php endforeach; ?>
                    </tbody>
                  </table>
                  <br>

                  <html>
                  <div class="center">
                    <script type="text/javascript" src="assets/pustaka_FSC/js/fusioncharts.js"></script>
                    <script type="text/javascript" src="assets/pustaka_FSC/js/themes/fusioncharts.theme.ocean.js"></script>
                    <script type="text/javascript">
                      FusionCharts.ready(function() {
                        var G1 = new FusionCharts({
                          "type": "column2d",
                          "renderAt": "lokasi",
                          "width": "800",
                          "height": "500",
                          "dataFormat": "jsonurl",
                          "dataSource": "pustaka_FSC/jml_proker.php"
                        });
                        G1.render();
                      })
                    </script>
                    </head>

                    <body>
                      <div id="lokasi">di sini</div>
                    </body>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- content-wrapper ends -->