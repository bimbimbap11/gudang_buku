<?php
    include "../koneksi.php";

    $nama_penerbit       = $_POST['nama_penerbit'];
    $no_telp_penerbit    = $_POST['no_telp_penerbit'];
    $email_penerbit      = $_POST['email_penerbit'];
    $alamat_penerbit     = $_POST['alamat_penerbit'];

    $sql = "INSERT INTO `tb_penerbit` ( `nama_penerbit`, `no_telp_penerbit`, `email_penerbit`, `alamat_penerbit`) VALUES ( '$nama_penerbit', '$no_telp_penerbit', '$email_penerbit', '$alamat_penerbit')";

    $sql_eksekusi = mysqli_query($koneksi, $sql);
    
    if($sql_eksekusi){
        header("location:show_penerbit.php");
    }else{
        echo "Gagal Input penerbit";
    }
?>