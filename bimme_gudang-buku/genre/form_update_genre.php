<?php
include "../koneksi.php";
$id_genre = $_GET['id_genre'];

$sql = "SELECT * FROM tb_genre WHERE id_genre='$id_genre'";
$sql_eksekusi = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($sql_eksekusi);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Genre</title>
</head>
<body>
    <h2>Ubah Genre</h2>
    <form action="update_genre.php" method="post">
        <table border='1'>
            
            <tr>
                <td>Nama Genre</td>
                <td>
                    <input type="hidden" name="id_genre" id="" value="<?php echo $data['id_genre'];?>">
                    <input type="text" name="nama_genre" id="nama_genre" value="<?php echo $data['nama_genre'];?>">
                </td>
            </tr>
            
            <tr>
                <td colspan='24'>
                <center>
                    <input type="submit" value="Ubah Genre">
                </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>