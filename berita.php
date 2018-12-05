<?php
require 'init.php';
session_start();
?>
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
				<a class="navbar-brand" href="index.php"><img src="assets/images/Jan.png" width="55px" alt=""></a>
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
<?php
$id_artikel = $_GET['id_artikel'];
$query = mysqli_query($con, "SELECT * FROM `artikel` WHERE id_artikel = '$id_artikel' ");
?>
<?php
while ($ambil = $query->fetch_assoc()) {
	?>
	<center>
		<div class="row">

			<h1><?php echo $ambil['judul']?></h1>
			<div class="col-md-5 col-md-offset-3">
				<img src="upload/<?php echo $ambil['gambar']; ?>" style="width:700px">
			</div>
		</div>
	<!-- <div class="text" style="margin-top: 70px">
</div> -->
<div class="text" style="
background-color: white;
width: 700px;
opacity: 0.5;
border: 5px solid white;
border-radius: 20px;
padding: 160px;
margin: 25px;">
<?php echo $ambil['konten']; ?>
<?php } ?>
</center>
</div>


<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="js.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>
