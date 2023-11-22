<?php
  include "../koneksi.php";

  $nama_genre = $_POST['nama_genre'];

  //echo $nama_genre;
  $sql = "INSERT INTO tb_genre (nama_genre)
          VALUES ('$nama_genre')";
  $sql_eksekusi = mysqli_query($koneksi, $sql);
  if($sql_eksekusi)
  {
    echo "Genre Berhasil Ditambah<br>";
    echo "Menuju <a href='show_genre.php'>Show Genre</a>";
  }
  else
  {
    echo "GAGAL Tambah Genre";
  }
?>