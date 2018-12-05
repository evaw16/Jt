<!DOCTYPE html>
<html>
<head>
	<title>Jember Tourism</title>
	<link rel="stylesheet" type="text/css" href="styleawal.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>

	<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap-3.3.7-dist/font/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<img class="wel" src="assets/images/welcome.png" alt="">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="assets/images/Jan.png" width="55px" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<!-- <li class="home"><a href="#">Home</a></li>
					<li class=""><a href="#">About</a></li> -->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li role="presentation">
						<a href="login.php">
							<button class="btn btn-primary" type="button">
								Login <span></span>
							</button>
						</a>
					</li>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br>


<div class = container>


<?php
include 'init.php';

    $sql = mysqli_query($con,"SELECT id_artikel, judul, konten, gambar FROM artikel WHERE status = 'Terima'");
    while($get = mysqli_fetch_assoc($sql)):
				$id = $get['id_artikel'];
        $judul =$get['judul'];
        $konten =$get['konten'];
        $gambar =$get['gambar'];

?>
<div class="col-md-4">
        <br>
        <div class="thumbnail"style="height:25%; padding:3%; background:rgba(247, 160, 110, 0.3);border-radius:15px; border:none">
          <br>
          <?="<img src='upload/".$gambar."'style='width:200px; heigth:200px;'>" ?>
          <h3 style="text-align:center; color:white"><?php echo $judul;?></h3>
          <p style="text-align:center; color:white"> <?php echo $konten;?></p>

          <br>
          <a href="berita.php?id_artikel=<?php echo $get['id_artikel']; ?>" class="btn btn-success btn-sm"></span> lihat lebih banyak</a>
       <!-- <p style="text-align:center"> <a href="?page=karya&aksi=lihat&id=" class="btn btn-primary" style="text-align:center">Baca</a> </p> -->
        </div>
      </div>

      <?php
      endwhile;
    ?>
</div>

<!-- awal carousell -->
<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> -->
	<!-- Indicators -->
	<!-- <ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol> -->

	<!-- Wrapper for slides -->
	<!-- <div class="carousel-inner container" role="listbox" style="
							border-radius: 30px;">
		<div class="item active">
			<img class="love" src="assets/images/nah.jpg" alt="Teluk Love Jember" style="width: 100%">
			<div class="carousel-caption">
				Teluk Lope Lope
			</div>
		</div>
		<div class="item">
			<img  src="assets/images/paps.jpg" alt="Papuma Jember" style="width: 100%; color: white">
			<div class="carousel-caption" >
				<h3><a href="#">Papuma Jember</a></h3>
			</div>
		</div>
		<div class="item">
			<img src="assets/images/terjun.jpg" alt="Air Terjun Jember" style="width: 100%">
			<div class="carousel-caption">
				AIr Terjun Jember
			</div>
		</div>
	</div> -->

	<!-- Controls -->
	<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div> -->
<!-- akhir carousell -->


<!-- <div class="row1" >
<div class="col-sm-6 col-md-4" >
<div class="thumbnail" style="background: rgba(0, 0, 0, 0.3); (0,0,0,0.3); border:none">
<img src="assets/images/gb1.jpeg" alt="Papuma Jember 2018">
<div class="caption">
<h3>Papuma Jember</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p><a href="#" class="btn btn-primary" role="button">Read</a>
</div>
</div>
</div>
</div>
<div class="row2">
<div class="col-sm-6 col-md-4">
<div class="thumbnail" style="background-color:black">
<img src="assets/images/images.jpg" alt="...">
<div class="caption">
<h3>Rembangan</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p><a href="#" class="btn btn-primary" role="button">Read</a>
</div>
</div>
</div>
</div>
<div class="row3">
<div class="col-sm-6 col-md-4">
<div class="thumbnail" style="background-color:black">
<img src="assets/images/love.jpg" width="288" style="background-color : black ; "alt="...">
<div class="caption">
<h3>Teluk Love</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p><a href="#" class="btn btn-primary" role="button">Read</a>
</div>
</div>
</div>
</div> -->

</div>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="js.js"></script>

<?php
if (isset($_POST['submit'])) {
	$user = $_POST['email'];
	$pass = $_POST['password'];
	if ($user == "admin" && $pass == "admin") {
		header("Location:adminUtama.html");
	}
}
?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
