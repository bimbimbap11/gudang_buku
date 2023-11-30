<?php
include "../koneksi.php";
$id_penerbit = $_GET['id_penerbit'];

$sql = "DELETE FROM tb_penerbit WHERE id_penerbit = '$id_penerbit'";
$sql_eksekusi = mysqli_query($koneksi, $sql);

if ($sql_eksekusi){
    header ("location:show_penerbit.php");
}else{
echo "Gagal Hapus, cacat u";
}
?>