<?php
include "../koneksi.php";
$id_penulis = $_GET['id_penulis'];

$sql = "DELETE FROM tb_penulis WHERE id_penulis = '$id_penulis'";
$sql_eksekusi = mysqli_query($koneksi, $sql);

if ($sql_eksekusi){
    header ("location:show_penulis.php");
}else{
echo "Gagal Hapus, cacat u";
}
?>