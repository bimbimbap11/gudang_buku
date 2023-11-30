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
    <h2>Show Penerbit</h2>
    <table border='3'>
        <tr>
            <td>No</td>
            <td>Nama Penerbit</td>  
            <td>No. Telp Penerbit</td>
            <td>Email Penerbit</td>  
            <td>Alamat Penerbit</td>  
            <td colspan='2'>Aksi</td>
        </tr>

        <?php
            $sql = "SELECT * FROM tb_penerbit";
            $sql_eksekusi = mysqli_query($koneksi, $sql);
            $i = 1;
            while ($data = mysqli_fetch_array($sql_eksekusi)){

            
        ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['nama_penerbit'];?> </td>
        <td><?php echo $data['no_telp_penerbit'];?> </td>
        <td><?php echo $data['email_penerbit'];?> </td>
        <td><?php echo $data['alamat_penerbit'];?> </td>
        <td><a href="hapus_penerbit.php?id_penerbit=<?php echo $data['id_penerbit']; ?>" onClick="return confirm ('yakin mau didelete? :/')">Hapus</a></td>
        <td><a href="form_update_penerbit.php?id_penerbit=<?php echo $data['id_penerbit']; ?>"">Update</a></td>
        </tr>
        
        <?php
        }
        ?>
    </table>
</body>
</html>