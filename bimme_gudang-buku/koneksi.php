<?php

  $server     = "localhost";
  $user       = "root";
  $password   = "";
  $database   = "db_gudang_buku";

  $koneksi = mysqli_connect($server, $user, $password) or die("GAGAL Terhubung dengan Server");

  $db      = mysqli_select_db($koneksi, $database) or die("Database Tidak Ditemukan!");

?>