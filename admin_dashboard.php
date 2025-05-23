<?php
include('db.php');
session_start();
?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f0f2f5;
    }
    .navbar {
      background-color: #007bff;
      color: white;
      padding: 1rem 2rem;
      text-align: center;
      font-size: 1.2rem;
    }
    .sidebar {
      width: 200px;
      background-color: #343a40;
      height: 100vh;
      float: left;
      color: white;
      padding-top: 20px;
      position: fixed;
      box-sizing: border-box;
    }
    .sidebar a {
      display: block;
      margin-bottom: 10px;
      border-radius: 5px;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      margin-left: 200px;
      padding: 2rem;
    }
    .card {
      background: white;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

  </style>
</head>
<body>

  <div class="navbar"><b>Waroeng</b> Nikmat</div>

  <div class="sidebar">
    <a href="#" class="option">Beranda</a>
    <a href="#" class="option">Profil</a>
    <a href="data.php" class="option">Data</a>
    <a href="login.php" class="option">Logout</a>
  </div>

  <div class="content">
    <div class="card">
      <h2>Selamat Datang <?php echo$_SESSION['username'];?> !</h2>
      <p>Ini adalah halaman dashboard Restoran.</p>
    </div>
  </div>

</body>
</html>