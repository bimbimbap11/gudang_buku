<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Genre</title>
</head>
<body>
  <h2>Show Genre</h2>
  <table border='1'>
    <tr>
      <td>No</td>
      <td>Nama Genre</td>
      <td colspan='2'>Aksi</td>
    </tr>

    <?php
      $sql = "SELECT * FROM tb_genre";
      $sql_eksekusi = mysqli_query($koneksi, $sql);

      $i=1;
      while($data = mysqli_fetch_array($sql_eksekusi))
      {
    ?>

        <tr>
          <td><?php echo $i++; ?></td>
          <td><?php echo $data['nama_genre']; ?></td>
          <td><a href="hapus_genre.php?id_genre=<?php echo $data['id_genre']; ?>" onClick="return confirm (Yakin INgin Menghapus Genre yg diPilih?)">Hapus</a></td>
          <td><a href="">Ubah</a></td>
        </tr>
    
    <?php
      }
    ?>

  </table>
</body>
</html>