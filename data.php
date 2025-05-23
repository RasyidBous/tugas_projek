<?php
include('db.php');
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
?>

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
    }
    .sidebar a {
      display: block;
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
    <a href="dashboard.php">Beranda</a>
    <a href="#">Profil</a>
    <a href="data.php">Data</a>
    <a href="logout.php">Logout</a>
  </div>


<body>
<div class="content">
<div class="card">
 <h1>DATA PENGGUNA</h1>
 <hr>
<table border=1 cellpadding=10>
    <tr>
        <td><b>ID</b></td>
        <td style="width: 250px;"><b><center>USERNAME</center></b></td>
        <td style="width: 250px;"><b><center>PASSWORD</center></b></td>
        <td style="width: 150px;"><b><center>LEVEL</center></b></td>
        <td style="width: 250px;"><b><center>TANGGAL BERGABUNG</center></b></td>
        <td style="width: 250px;"><b><center>AKSI</center></b></td>
    </tr>
</div>
</div>