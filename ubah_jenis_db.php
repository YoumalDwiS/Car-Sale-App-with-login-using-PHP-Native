<?php
    function sukses()
    {
        echo "<script>alert('Data berhasil diubah');
            window.location.href = 'read_jenis.php';</script>";
    }
    function kembali()
    {
        echo "<script>alert('Tidak Jadi ya');
            window.location.href = 'read_jenis.php';</script>";
    }
    function gagal()
    {
        echo "<script>alert('Gagal menghapus');window.history.go(-1);</script>";
    }

    if(isset($_GET['id_jenis_Mobil']))
    {
        $id = $_GET['id_jenis_Mobil'];
        $nama = $_POST['nama'];
        include 'koneksi.php';

        $query = "UPDATE jenis_mobil SET nama_jenis_Mobil='$nama' WHERE id_jenis_Mobil='$id'";
        $update = mysqli_query($con, $query);

        if($update)
        {
            sukses();
        }else{
            gagal();
        }
    }
?>