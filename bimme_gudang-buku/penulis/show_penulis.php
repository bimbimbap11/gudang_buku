<?php
include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Show Penulis</h2>
    <table border='3'>
        <tr>
            <td>No</td>
            <td>Nama Penulis</td>
            <td>Jenis Kelamin</td>
            <td>No. Telp Penulis</td>
            <td>Email Penulis</td>  
            <td colspan='2'></td>
        </tr>

        <?php
            $sql = "SELECT * FROM tb_penulis";
            $sql_eksekusi = mysqli_query($koneksi, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($sql_eksekusi)){

            
        ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['nama_penulis'];?> </td>
        <td><?php echo $data['jk'];?> </td>
        <td><?php echo $data['no_telp_penulis'];?> </td>
        <td><?php echo $data['email_penulis'];?> </td>
        <td><a href="hapus_penulis.php?id_penulis=<?php echo $data['id_penulis']; ?>" onClick="return confirm (Yakin Ingin Menghapus Penulis yg diPilih?)">Hapus</a></td>
        <td><a href="form_update_penulis.php?id_penulis=<?php echo $data['id_penulis']; ?>" onClick="return confirm (Yakin Ingin Update Penulis yg diPilih?)">Update</a></td>
        </tr>
        
        <?php
        }
        ?>
    </table>
</body>
</html>