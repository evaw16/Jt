<?php
require_once("init.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style media="screen">
  .form{
    box-shadow:  5px 5px 10px red
  }
</style>
</head>
<body>
  <img class="Jan" src="assets/images/Jan.png" alt="">
  <div class="form">
    <ul class="tab-group">
    </ul>
    <div id="login">
      <form method="post">
        <div class="field-wrap">
          <label>
            Username<span class="req">*</span>
          </label>
          <input type="text" name="email" required autocomplete="off"/>
        </div>
        <div class="field-wrap">
          <label>
            Password<span class="req">*</span>
          </label>
          <input type="password"name="password"required autocomplete="off"/>
        </div>
        <input class="button button-block" type="submit" name="submit" value="submit"/>
      </form>
    </div>
  </div><!-- tab-content -->
</div> <!-- /form -->
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript" src="js.js"></script>
<?php
if (isset($_POST['submit'])) {
  $user = $_POST['email'];
  $pass = md5($_POST['password']);
  // $pass = $_POST['password'];
  // if ($user == "papuma" && $pass == "papuma") {
  // 	header("Location:adminUtama.php");
  // }
  $sql = "select * from aktor where username = '$user' and password = '$pass'";
  $result = mysqli_query($con,$sql);
  if (mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    if ($row['level'] == 1) {
      $_SESSION['id_pegawai'] = $row['id_pegawai'];
      header("Location:adminUtama.php");
    } else if ($row['level'] == 2) {
      $_SESSION['id_pegawai'] = $row['id_pegawai'];
      header("Location:adminCabang.php");
    }
  } else{
    ?>
    <script type="text/javascript">
    alert("Login Gagal, Username atau Password salah");
    </script>
    <?php
  }
}

?>
</body>
</html>
