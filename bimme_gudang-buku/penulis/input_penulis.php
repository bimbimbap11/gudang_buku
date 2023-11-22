<?php
    include "../koneksi.php";

    $nama_penulis       = $_POST['nama_penulis'];
    $jk                 = $_POST['jk'];
    $no_telp_penulis    = $_POST['no_telp_penulis'];
    $email_penulis      = $_POST['email_penulis'];
    $alamat_penulis     = $_POST['alamat_penulis'];

    $sql = "INSERT INTO `tb_penulis` ( `nama_penulis`, `jk`, `no_telp_penulis`, `email_penulis`, `alamat_penulis`) VALUES ( '$nama_penulis', '$jk', '$no_telp_penulis', '$email_penulis', '$alamat_penulis')";

    $sql_eksekusi = mysqli_query($koneksi, $sql);
    
    if($sql_eksekusi){
        header("location:show_penulis.php");
    }else{
        echo "Gagal Input Penulis";
    }
?>