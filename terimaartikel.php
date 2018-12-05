<?php
include 'init.php';
$id = $_GET['id'];
$sql = "UPDATE `artikel` SET `status`='Terima' WHERE `id_artikel`='$id' ";
$query = mysqli_query($con,$sql);
?>
<script type="text/javascript">
	window.location.href="artikelverif.php";
</script>
