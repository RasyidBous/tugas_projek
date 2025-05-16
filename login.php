<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="background-color: lightblue;">
    <center>
        <table cellpadding =15 style="box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:rgb(78, 184, 216)">
        <tr >
            <td colspan=3><center><h1>Form Login</h1></center></td>
        </tr>
        <tr>
            <td><form action="process_login.php" method="POST"></td>
        </tr>
        <tr>
            <td><center><input type="text" style="width: 250px; height: 30px; border:0; background-color:rgb(172, 216, 230)" placeholder ="Username" name="username" required></center></td>
        </tr>
        <tr>
            <td><center><input type="password" style="width: 250px; height: 30px; border:0; background-color:rgb(172, 216, 230)" placeholder ="Password" name="password" required></center></td>
        </tr>
        <tr>
            <td><center><button type="submit" style="background-color:rgb(61, 132, 202); color: white; padding: 10px 20px; border: none; border-radius: 5px; width: 250px; height: 30px">Login</button></center></td>
        </tr>
        </table>
    </center>
    </form>
</body>
</html>
