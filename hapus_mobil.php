<?php
include 'koneksi.php';

$id_file=$_GET['id_Mobil'];
$modal=mysqli_query($con, "DELETE FROM mobil WHERE id_Mobil='$id_file'");
echo '<script language="javascript" type="text/javascript">
alert("data berhasil di hapus!");</script>';
echo "<meta http-equiv='refresh' content='2; url=read_mobil.php'>";
?>