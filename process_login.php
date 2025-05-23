<body style="background-color: lightblue;">
<?php
session_start();
include 'db.php';
$username = trim($_POST['username']);
$password = $_POST['password'];

// Cari user berdasarkan username
$sql = "SELECT * FROM user WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();


if ($user && password_verify($password, $user['password'])) {
    // Login berhasil
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['level'] = $user['level'];

    switch ($user['level']) {
                case 'admin':
                    header("Location: admin_dashboard.php");
                    break;
                case 'kasir':
                    header("Location: kasir_dashboard.php");
                    break;
                case 'waiter':
                    header("Location: waiter_dashboard.php");
                    break;
            }
            exit;
} else{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);


}if ($stmt->execute()) {
    echo "<table cellpadding =15 style='border-radius: 10px; box-shadow: 10px 10px 25px rgba(0, 0, 0, 0.3);position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 30%;
        background-color:rgb(255, 255, 255)'>
            <tr>
                <td><center>Login Berhasil berhasil! <a href='dashboard.php'>Pesan disini!</a></center></td>
            </tr>
        </table>";
}


?>