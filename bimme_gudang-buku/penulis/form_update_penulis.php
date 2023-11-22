<?php
    include "../koneksi.php";

    $id_penulis = $_GET['id_penulis'];

    $sql = "SELECT * FROM tb_penulis WHERE id_penulis='$id_penulis'";
    $sql_eksekusi($koneksi, $sql);
    $data = mysqli_fetch_array($sql_eksekusi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penulis</title>
</head>
<body>
    <h2>Formulir Penulis</h2>

    <form action="update_penulis.php" method="post">
        <table border='1'>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="nama_penulis"></td>
            </tr>

            <tr>
                <td>Jenis Kelamins</td>
                <td>
                    <input type="radio" name="jk" value="L" <?php if($data['jk'] == 'L') {echo "checked"; } ?> required>Laki - Laki
                    <input type="radio" name="jk" value="P" <?php if($data['jk'] == 'P') {echo "checked"; } ?> required>Perempuan
                </td>
            </tr>

            <tr>
                <td>No. Telp</td>
                <td><input type="number" name="nama_penulis" value="<?php echo $data ['no_telp_penulis'];?>"></td>
            </tr>
            
            <tr>
                <td>Email Penulis</td>
                <td><input type="email" name="email_penulis" value="<?php echo $data ['email_penulis']; ?>"></td>
            </tr>
            
            <tr>
                <td>Alamat Penulis</td>
                <td>
                    <textarea name="alamat_penulis" id="" cols="30" rows="10" <?php echo $data['alamat_penulis']; ?>></textarea>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <center>
                        <input type="submit" value="Tambah Penulis">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>