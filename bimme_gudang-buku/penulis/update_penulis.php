<?php
include "../koneksi.php";

$id_penulis = $_POST['id_penulis'];
$nama_penulis = $_POST['nama_penulis'];
$jk = $_POST['jk'];
$no_telp_penulis = $_POST['no_telp_penulis'];
$email_penulis = $_POST['email_penulis'];
$alamat_penulis = $_POST['alamat_penulis'];

$sql = "UPDATE tb_penulis 
SET 
nama_penulis='$nama_penulis', 
jk='$jk', 
no_telp_penulis='$no_telp_penulis', 
email_penulis='$email_penulis', 
alamat_penulis='$alamat_penulis' 

WHERE 

id_penulis='$id_penulis' ";

$sql_eksekusi = mysqli_query($koneksi, $sql);
if ($sql) {
    header("location:show_penulis.php");
} else {
    echo "Gagal Mengubah data !";
}

?>

