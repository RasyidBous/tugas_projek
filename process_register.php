<body style="background-color: rgb(110, 175, 245);">
<?php
include 'db.php';

$username = trim($_POST['username']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$level    = $_POST['level'];

// Cek apakah password dan konfirmasi sama
if ($password !== $confirm_password) {
    echo "Password dan Konfirmasi Password tidak cocok!";
    exit;
}

// Cek apakah username sudah ada
$sql = "SELECT * FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<table cellpadding =15 style='border-radius: 10px; box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:rgb(255, 255, 255)'>
            <tr>
                <td><center>Username sudah digunakan!</center></td>
            </tr>
        </table>";
    exit;
}

// Simpan ke database
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO user (username, password, level) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $hashed_password, $level);

if ($stmt->execute()) {
    echo "<table cellpadding =15 style='border-radius: 10px; box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:rgb(255, 255, 255)'>
            <tr>
                <td><center>Registrasi berhasil! <a href='login.php'>Login di sini</a></center></td>
            </tr>
        </table>";
} else {
    echo "<table cellpadding =15 style='box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:rgb(110, 175, 245)'>
            <tr>
                <td><center>Registrasi gagal: </center></td>
                </tr>
        </table>";
}
?>
</body>