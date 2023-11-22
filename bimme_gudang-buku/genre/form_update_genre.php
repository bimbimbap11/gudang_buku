<?php
include "../koneksi.php";
$id_genre = $_GET['id_genre'];

$sql = "SELECT * FROM tb genre WHERE id_genre='$id_genre'";
$sql = mysqli_query($koneksi, $sql);
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
        <table border='1'></table>
        <tr>
            <td>Nama Genre</td>
            <td><input type="text" name="nama_genre" value="<?php echo ['nama_genre']; ?>"></td>
        </tr>
        <tr>
            <td colspan='2'></td>
            <center>
                <input type="submit" value="">
            </center>
        </tr>
    </form>

</body>
</html>