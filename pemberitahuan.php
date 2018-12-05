<?php
require_once 'init.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Petugas</title>
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
          <div class="sidebar-avatar-text">Petugas Pariwisata</div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
					<li ><a href="tiket.php"><i class="fa fa-fw fa-star"></i><span>Penjualan Tiket</span></a></li>
					<li><a href="rekap.php"><i class="fa fa-fw fa-font"></i><span>Rekapan Penjualan Tiket</span></a></li>
					<li>
						<a href="#nav-dropdown1" data-toggle="collapse" aria-controls="nav-dropdown1">
							<i class="fa fa-fw fa-window-maximize"></i><span>Pengajuan</span>
							<span class="sidebar-nav-arrow"><i class="fa fa-angle-down"></i></span>
						</a>
						<ul class="sidebar-nav-child collapse collapseable" id="nav-dropdown1">
							<li><a href="artikelp.php"><i class="fa fa-fw fa-window-maximize"></i><span>Artikel</span></a></li>
							<li><a href="proposalp.php"><i class="fa fa-fw fa-window-restore"></i><span>Proposal</span></a></li>
							<!-- <li><a href="alert.html"><i class="fa fa-fw fa-bell"></i><span>Alert</span></a></li> -->
						</ul>
					</li>
            <li class="active"><a href="pemberitahuan.php"><i class="fa fa-fw fa-bell"></i><span>Pemberitahuan</span></a></li>
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
                <a class="navbar-brand text-size-24" href="#"><i class="fa fa-fw fa-bell"></i> Verifikasi Artikel</a>
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
          </div>
        </nav>
        <table class="table table-bordered" style="margin-left:110px; width:950px;">
          <thead>
            <tr>
              <th style="text-align:center">Nama Pegawai</th>
              <th style="text-align:center">Tanggal</th>
              <th style="text-align:center">Gambar</th>
              <th style="text-align:center">Judul</th>
              <th style="text-align:center">Konten</th>
              <th style="text-align:center">Status</th>
              <!-- <th style="text-align:center">Aksi</th> -->

            </tr>
          </thead>
          <tbody>
            <?php

            $sql="SELECT artikel.id_pegawai, aktor.nama, artikel.tanggal,
                         artikel.gambar, artikel.judul, artikel.konten, artikel.status
                  FROM artikel JOIN aktor ON artikel.id_pegawai = aktor.id_pegawai
                  WHERE aktor.id_pegawai = '$_SESSION[id_pegawai]'";

            $result = mysqli_query($con,$sql);
            while ($item = mysqli_fetch_array($result)) {
              ?>
              <tr>
                <td hidden><?=$item['id_pegawai']?></td>
                <td style="text-align:center"><?=$item['nama']?></td>
                <td style="text-align:center"><?=$item['tanggal']?></td>
                <td style="text-align:center"><?="<img src='upload/".$item['gambar']."'style='width:200px; heigth:200px;'>" ?></td>
                <td style="text-align:center"><?=$item['judul']?></td>
                <td style="text-align:center"><?=$item['konten']?></td>
                <td style="text-align:center"><?=$item['status']?></td>
                <!-- <td>
                  <p style="text-align:center"><a href="terimaartikel.php?id=<?php echo $item['id_pegawai']?>" onclick="return confirm('Anda akan menerima artikel');"><button class="btn btn-success bold">Terima</button></a>
                <a href="tdkterimaartikel.php?id=<?php echo $item['id_pegawai']?>" onclick="return confirm('Anda akan menolak artikel?');"><button class="btn btn-warning bold">Tolak</button></a></p>
                </td> -->

              </tr>

              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </body>
    <script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme-floyd.js"></script>
    </html>
  }

  ?>
