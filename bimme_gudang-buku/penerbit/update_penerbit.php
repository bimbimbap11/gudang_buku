<?php
include "../koneksi.php";

$id_penerbit = $_POST['id_penerbit'];
$nama_penerbit = $_POST['nama_penerbit'];
$no_telp_penerbit = $_POST['no_telp_penerbit'];
$email_penerbit = $_POST['email_penerbit'];
$alamat_penerbit = $_POST['alamat_penerbit'];

$sql = "UPDATE `tb_penerbit` 
    SET 
`nama_penerbit` = '$nama_penerbit', 
`no_telp_penerbit` = '$no_telp_penerbit', 
`email_penerbit` = '$email_penerbit', 
`alamat_penerbit` = '$alamat_penerbit' 
    WHERE 
`id_penerbit` = $id_penerbit";

$sql_eksekusi = mysqli_query($koneksi, $sql);
if ($sql) {
    header("location:show_penerbit.php");
} else {
    echo "Gagal Mengubah data !";
}

?>

