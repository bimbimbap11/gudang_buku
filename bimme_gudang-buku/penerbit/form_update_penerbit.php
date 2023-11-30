<?php
include "../koneksi.php";
$id_penerbit = $_GET['id_penerbit'];

$sql = "SELECT * FROM tb_penerbit WHERE id_penerbit ='$id_penerbit'";
$sql_eksekusi = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($sql_eksekusi);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Penerbit</title>
</head>

<body>
    <h2>Formulir Update Penerbit</h2>

    <form action="update_penerbit.php" method="POST">
        <table border='1px'>
            <tr>
                <td>Nama Penerbit</td>
                <td>
                    <input type="hidden" name="id_penerbit" value="<?php echo $data['id_penerbit']; ?>">
                    <input type="text" name="nama_penerbit" value="<?php echo $data['nama_penerbit']; ?>" required autocomplete="off">
                </td>
            </tr>

            <tr>
                <td>No. Telpon</td>
                <td><input type="number" name="no_telp_penerbit" value="<?php echo $data['no_telp_penerbit']; ?>" </td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email_penerbit" value="<?php echo $data['email_penerbit']; ?>" required autocomplete="off"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>
                    <textarea name="alamat_penerbit" id="" cols="21" rows="2" required autocomplete="off"><?php echo $data['alamat_penerbit'];?></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <input type="submit" value="Update Penerbit">
                    </center>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>