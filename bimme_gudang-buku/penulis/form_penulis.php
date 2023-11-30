<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penulis</title>
</head>
<body>
    <h2>Formulir Penulis</h2>

    <form action="input_penulis.php" method="post">
        <table border='1'>
            <tr>
                <td>Nama Penulis</td>
                <td><input type="text" name="nama_penulis" required autocomplete="off"></td>
            </tr>

            <tr>
                <td>Jenis Kelamins</td>
                <td>
                    <input type="radio" name="jk" value="L" required autocomplete="off">Laki - Laki
                    <input type="radio" name="jk" value="P" required autocomplete="off">Perempuan
                </td>
            </tr>

            <tr>
                <td>No. Telp</td>
                <td><input type="number" name="no_telp_penulis" required autocomplete="off"></td>
            </tr>
            
            <tr>
                <td>Email Penulis</td>
                <td><input type="email" name="email_penulis" id="" required autocomplete="off"></td>
            </tr>
            
            <tr>
                <td>Alamat Penulis</td>
                <td>
                    <textarea name="alamat_penulis" id="" cols="30" rows="10" required autocomplete="off"></textarea>
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