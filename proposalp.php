<?php
require_once 'init.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
          <li><a href="pemberitahuan.php"><i class="fa fa-fw fa-bell"></i><span>Pemberitahuan</span></a></li>
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
              <a class="navbar-brand text-size-24" href="#"><i class="fa fa-fw fa-font"></i><?php echo $_SESSION['id_pegawai'] ?></a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="index.php">
                    <span class="fa-stack">
                      <i class="fa fa-circle fa-stack-2x" ></i>
                      <i class="fa fa-power-off fa-stack-1x"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <div id="content">
        <div class="container-fluid">
          <div class="col-xs-12 col-md-6">
            <div class="panel panel-default" style="width:900px; height:500px; margin-left:70px;">
              <div class="panel-heading">
                <h3 class="panel-title">pengajuan proposal</h3>
                <span class="text-grey"></span>
              </div>
              <div class="panel-body">
                <div class="col-sm-offset-2 col-sm-8">
                  <form class="form-horizontal" enctype="multipart/form-data" method="POST">
                    Dalam upaya memajukan dan mengembangkan wisata,
                    <br>kami menyediakan template proposal untuk pengajuan dana
                    <br>Silahkan klik link di bawah<br><br>
                    <a href="proposal.docx" download>Link download</a>
                    <br><br>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-8 control-label">Proposal</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control input-lg" placeholder="Gambar" name="proposal" required>
                  </div>
                </div>
                <div class="form-group" style="margin-top: 90px">
                  <label class="col-sm-8 control-label">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control input-lg"  placeholder="Tanggal" name="tanggal" required>
                  </div>
                  <button type="submit" class="btn btn-primary" name="save" style="margin-left:500px; margin-top:30px;">Kirim</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/theme-floyd.js"></script>
  </html>
  <?php
  if (isset($_POST["save"])) {
    $id= $_SESSION['id_pegawai'];
    // $proposal = $_POST['proposal'];
    $tanggal = $_POST['tanggal'];
    $status = 'Tolak';
    $proposal = $_FILES['proposal']['name'];
    $tmp = $_FILES['proposal']['tmp_name'];

    $proposalbaru = date('dmYHis').$proposal;
    $path = "proposal/".$proposal;

    // echo "$_SESSION[id]";

    if(move_uploaded_file($tmp, $path)){


    // echo "$_SESSION[id]";


    $sql = "INSERT INTO `proposal` (`id_proposal`, `id_pegawai`, `proposal`, `tanggal`, `status`)
           VALUES (NULL, '$id', '$proposalbaru', '$tanggal', '$status')";
    mysqli_query($con,$sql);
    ?>
    <script type="text/javascript">
    alert("data berhasil disimpan");
    </script>
  <?php
    }
  }

  ?>
