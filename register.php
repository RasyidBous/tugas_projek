<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body style="background-color:rgb(110, 175, 245);">
    <center>
        <table cellpadding =15 style="box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:#007bff">
            <tr>
                <td colspan=4><center><h1 style="color:white;">Registrasi<br>Waroeng Nikmat</h1></center></td>
            </tr>
            <tr>
                <td><form action="process_register.php" method="POST"></td>
            </tr>
            <tr>
                <td><center><input type="text" style="width: 250px; height: 30px; border:0; background-color:rgb(172, 216, 230)" placeholder ="Username" name="username" required></center></td>
            </tr>
            <tr>
                <td><center><input type="password" style="width: 250px; height: 30px; border:0; background-color:rgb(172, 216, 230)" placeholder ="Password" name="password" required></center></td>
            </tr>
            <tr>
                <td><center><input type="password" style="width: 250px; height: 30px; border:0; background-color:rgb(172, 216, 230)" placeholder =" Konfirmasi Password" name="confirm_password" required></center></td>
            </tr>
            <tr>
                <td colspan=4><center><button type="submit" style="background-color:rgb(11, 78, 145); color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 250px; height: 30px">Register</button></center></td>
            </tr>
            <tr>
                <td></form></td>
            </tr>
            <tr>
                <td colspan=4><center><p style="color:white;">Sudah punya akun? <a href="login.php">Login di sini</a></p></center></td>
            </td>
        </table>
</center>
</body>
</html>
