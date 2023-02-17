<?php
include 'koneksi.php';

$id_file=$_GET['id_jenis_Mobil'];
$modal=mysqli_query($con, "UPDATE jenis_mobil SET status_jenis_Mobil= 0 WHERE id_jenis_Mobil='$id_file'");
echo '<script language="javascript" type="text/javascript">
alert("data berhasil di hapus!");</script>';
echo "<meta http-equiv='refresh' content='2; url=read_jenis.php'>";
?>