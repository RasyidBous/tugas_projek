<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body style="background-color:rgb(110, 175, 245);">
    <center>
        <table cellpadding =5 style="box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3); border-radius: 15px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color: #ffff">
            <tr>
                <td colspan=4><center><h1 style="font-family: Verdana, sans-serif;">Registrasi<br>Waroeng Nikmat</h1></center></td>
            </tr>
            <tr>
                <td><form action="process_register.php" method="POST"></td>
            </tr>
            <tr>
                <td><center><input type="text" style="width: 85%; height: 40px; border:0; border-radius: 10px; background-color:rgb(172, 216, 230)" placeholder ="Username" name="username" required></center></td>
            </tr>
            <tr>
                <td><center><input type="password" style="width: 85%; height: 40px; border:0; border-radius: 10px; background-color:rgb(172, 216, 230)" placeholder ="Password" name="password" required></center></td>
            </tr>
            <tr>
                <td><center><input type="password" style="width: 85%; height: 40px; border:0; border-radius: 10px; background-color:rgb(172, 216, 230)" placeholder =" Konfirmasi Password" name="confirm_password" required></center></td>
            </tr>
            <tr>
                <td><center>
                        <select name="level" style="width: 85%; height: 40px; border:0; border-radius: 10px; border: 10%; background-color:rgb(172, 216, 230); color: #888888;"required>
                        <option value="">Pilih Level</option>
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                        <option value="waiter">Waiter</option>
                        </select></center></td>
            </tr>
            <tr>
                <td colspan=4><center><button type="submit" style="background-color:rgb(11, 78, 145); color: white; padding: 10px 20px; border: none; width: 85%; height: 40px; border-radius: 10px;">Register</button></center></td>
            </tr>
            <tr>
                <td></form></td>
            </tr>
            <tr>
                <td colspan=4><center>Sudah punya akun? <a href="login.php">Login di sini</a></p></center></td>
            </td>
        </table>
</center>
</body>
</html>
