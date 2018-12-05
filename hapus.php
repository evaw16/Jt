<?php

require_once 'init.php';

$id = $_GET['id_pegawai'];
$sql = "delete from aktor where id_pegawai = $id";
mysqli_query($con,$sql);
header("location:petugas.php");

?>
<script type="text/javascript">
  alert("Data Berhasil Dihapus");
</script>
