<?php
require_once 'init.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even) {
    background-color: #dddddd;
  }
</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Administrator</title>
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/theme.css">
<link rel="stylesheet" href="assets/css/theme-helper.css">
</head>

<body>
  <div id="wrapper">
    <div id="sidebar">
      <div id="sidebar-wrapper">
        <div class="gambar">
          <img src="assets/images/Jan.png" alt="" width="100%">
        </div>
        <div class="sidebar-avatar">
          <div class="sidebar-avatar-image"><img src="assets/images/blank-avatar.png" alt="" class="img-circle"></div>
          <div class="sidebar-avatar-text">Admin Pariwisata</div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
          <li class="active"><a href="pengunjung.php"><i class="fa fa-fw fa-star"></i><span>Data Pengunjung</span></a></li>
          <li><a href="artikelpost.php"><i class="fa fa-fw fa-font"></i><span>Artikel</span></a></li>
          <li>
            <a href="#nav-dropdown1" data-toggle="collapse" aria-controls="nav-dropdown1">
              <i class="fa fa-fw fa-window-maximize"></i><span>Verifikasi</span>
              <span class="sidebar-nav-arrow"><i class="fa fa-angle-down"></i></span>
            </a>
            <ul class="sidebar-nav-child collapse collapseable" id="nav-dropdown1">
              <li><a href="artikelverif.php"><i class="fa fa-fw fa-window-maximize"></i><span>Artikel</span></a></li>
              <li><a href="proposalverif.php"><i class="fa fa-fw fa-window-restore"></i><span>Proposal</span></a></li>
              <!-- <li><a href="alert.html"><i class="fa fa-fw fa-bell"></i><span>Alert</span></a></li> -->
            </ul>
            <li><a href="petugas.php"><i class="fa fa-fw fa-bell"></i><span>Data Petugas</span></a></li>
          </ul>
        </div>
      </div>
      <div id="main-panel">
        <div id="top-nav">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <!-- Navbar toggle button -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                  <i class="fa fa-bars"></i>
                </button>
                <!-- Sidebar toggle button -->
                <button type="button" class="sidebar-toggle">
                  <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand text-size-24" href="#"><i class="fa fa-star-o"></i> Data Pengunjung</a>
              </div>
              <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="index.php">
                      <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-power-off fa-stack-1x"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <table class="table table-bordered" style="margin-left:100px; width:650px;">
            <thead>
              <tr>
                <th>Nama Wisata</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql="select * from  aktor where level = 2";
              $result = mysqli_query($con,$sql);
              while ($item = mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td hidden><?=$item['id_pegawai']?></td>
                  <td><?=$item['nama_wisata']?></td>
                  <!-- <td<?=$item['detail']?>></td> -->
                  <td>
                    <a href="rekapad.php?id_pegawai=<?=$item['id_pegawai']?>">Detail</a>
                  </td>
                </tr>

                <?php
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </body>
  <script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/theme-floyd.js"></script>

  </html>
