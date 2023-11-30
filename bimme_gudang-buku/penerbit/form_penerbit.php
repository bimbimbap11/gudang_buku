<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Penerbit</title>
</head>
<body>
    <h2>Formulir Penerbit</h2>

    <form action="input_penerbit.php" method="post">
        <table border='1'>
            <tr>
                <td>Nama Penerbit</td>
                <td><input type="text" name="nama_penerbit" required autocomplete="off"></td>
            </tr>

            <tr>
                <td>No. Telp Penerbit</td>
                <td><input type="number" name="no_telp_penerbit" required autocomplete="off"></td>
            </tr>
            
            <tr>
                <td>Email Penerbit</td>
                <td><input type="email" name="email_penerbit" id="" required autocomplete="off"></td>
            </tr>
            
            <tr>
                <td>Alamat Penerbit</td>
                <td>
                    <textarea name="alamat_penerbit" id="" cols="30" rows="10" required autocomplete="off"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <center>
                        <input type="submit" value="Tambah Penerbit">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>