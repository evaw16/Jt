<?php
require_once 'init.php';
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
          <div class="sidebar-avatar-text">Admin Pariwisata</div>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-close"><a href="#"><i class="fa fa-fw fa-close"></i></a></li>
          <li><a href="index.html"><i class="fa fa-fw fa-star"></i><span>Data Pengunjung</span></a></li>
          <li><a href="artikel.html"><i class="fa fa-fw fa-font"></i><span>Artikel</span></a></li>
          <li>
            <a href="#nav-dropdown1" data-toggle="collapse" aria-controls="nav-dropdown1">
              <i class="fa fa-fw fa-window-maximize"></i><span>Verifikasi</span>
              <span class="sidebar-nav-arrow"><i class="fa fa-angle-down"></i></span>
            </a>
            <ul class="sidebar-nav-child collapse collapseable" id="nav-dropdown1">
              <li><a href="artikelverif.php"><i class="fa fa-fw fa-window-maximize"></i><span>Artikel</span></a></li>
              <li><a href="modal.html"><i class="fa fa-fw fa-window-restore"></i><span>Proposal</span></a></li>
              <!-- <li><a href="alert.html"><i class="fa fa-fw fa-bell"></i><span>Alert</span></a></li> -->
            </ul>
            <li class="active"><a href="petugas.php"><i class="fa fa-fw fa-bell"></i><span>Data Petugas</span></a></li>
          </ul>
          <!-- <div class="sidebar-footer">
          <hr style="border-color: #DDD">
          created by <a href="http://ainuls.github.io" target="_blank" class="text-default">ainul yaqin</a><br>
        </div> -->
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
              <a class="navbar-brand text-size-24" href="#"><i class="fa fa-fw fa-bell"></i> Data Petugas</a>
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
            <div class="petugas">
              <div id="content">
                <div class="container-fluid">
                  <div class="col-xs-12 col-md-6">
                    <div class="panel panel-default" style="width:900px; height:500px;">
                      <div class="panel-heading">
                        <h3 class="panel-title">form</h3>
                        <span class="text-grey"></span>
                      </div>
                      <div class="panel-body">
                        <form class="form-horizontal" method="post">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama Wisata</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control input-lg" placeholder="Nama Wisata" name="nama_wisata" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control input-lg" placeholder="Nama" name="nama" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control input-lg" placeholder="Alamat" name="alamat" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">No. Hp</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control input-lg" placeholder="No. Hp" name="notelp" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control input-lg" placeholder="Username" name="username" required >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                            <input name="submit" value="Save" type="submit" class="btn btn-primary">
                            <button type="reset" class="btn btn-default">Cancel</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</body>
<script src="assets/plugins/jquery/jquery-3.1.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/theme-floyd.js"></script>

</html>
<?php
if (isset($_POST['submit'])) {
  $nama_wisata = $_POST['nama_wisata'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $notelp = $_POST['notelp'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $level = 2;

  $sql = "INSERT INTO `aktor`(`nama_wisata`,`nama`, `alamat`, `no. hp`, `username`, `password`, `level`)
  VALUES ('$nama_wisata','$nama','$alamat','$notelp','$username','$password',$level)";
  mysqli_query($con,$sql);
  ?>
  <script type="text/javascript">
  alert("Data Berhasil Disimpan");
  </script>
  <?php
  
  mysqli_query($con,$sql);
  header("location:petugas.php");
  exit();
}

?>
