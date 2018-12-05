<?php
include 'init.php';
$id = $_GET['id'];
$sql = "UPDATE `proposal` SET `status`='Terima' WHERE `id_proposal`='$id' ";
$query = mysqli_query($con,$sql);
?>
<script type="text/javascript">
	window.location.href="proposalverif.php";
</script>
