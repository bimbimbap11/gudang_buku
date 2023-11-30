<?php
include "../koneksi.php";
$id_penulis = $_GET['id_penulis'];

$sql = "SELECT * FROM tb_penulis WHERE id_penulis ='$id_penulis'";
$sql_eksekusi = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($sql_eksekusi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Penulis</title>
</head>

<body>
    <h2>Formulir Update Penulis</h2>

    <form action="update_penulis.php" method="POST">
        <table border='1px'>
            <tr>
                <td>Nama Penulis</td>
                <td>
                    <input type="hidden" name="id_penulis" value="<?php echo $data['id_penulis']; ?>">
                    <input type="text" name="nama_penulis" value="<?php echo $data['nama_penulis']; ?>" required autocomplete="off">
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jk" value="L" <?php if ($data['jk'] == 'L') {echo "checked";} ?> required autocomplete="off">Laki Laki
                    <input type="radio" name="jk" value="P" <?php if ($data['jk'] == 'P') {echo "checked";} ?> required autocomplete="off">Perempuan
                </td>
            </tr>

            <tr>
                <td>No. Telpon</td>
                <td><input type="number" name="no_telp_penulis" value="<?php echo $data['no_telp_penulis']; ?>" </td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email_penulis" value="<?php echo $data['email_penulis']; ?>" required autocomplete="off"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat_penulis" id="" cols="21" rows="2" required autocomplete="off"><?php echo $data['alamat_penulis'];?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <input type="submit" value="Update Penulis">
                    </center>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>