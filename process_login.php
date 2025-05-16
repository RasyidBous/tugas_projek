<body style="background-color: lightblue;">
<?php
session_start();
include 'db.php';
$username = trim($_POST['username']);
$password = $_POST['password'];

// Cari user berdasarkan username
$sql = "SELECT * FROM regist WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


if ($user && password_verify($password, $user['password'])) {
    // Login berhasil
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: dashboard.php');
} else {
    // Login gagal
    echo "<table cellpadding =15 style='box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:rgb(78, 184, 216)'>
            <tr>
                <td><center>Username atau Password salah!<br><a href='login.php'>Coba lagi</a></center></td>
            </tr>
        </table>";
}
?>
