<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Tinggi penuh layar */
      margin: 0;
    }

    form {
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
      width: 100%;
      max-width: 360px; /* Membatasi lebar maksimal form */
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      box-sizing: border-box; /* Memastikan padding tidak menambah ukuran form */
      margin-bottom: 300px; /* Tambahkan margin bawah untuk menggeser form ke atas */
    }

    input[type="text"], input[type="password"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      background-color: rgb(10, 134, 216);
      color: white;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
    }

    button:hover {
      background-color: #03995d;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .cancelbtn {
      background-color: #f44336;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      color: white;
      font-size: 16px;
    }

    .button-group {
      display: flex;
      flex-direction: column;
      gap: 10px; /* Memberikan jarak antar tombol */
    }

    @media screen and (max-width: 400px) {
      form {
        padding: 15px;
      }

      h2 {
        font-size: 18px;
      }
    }
  </style>
</head>
<body>
  <form method="post">
    <h2>Login</h2>
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Masukkan Username" name="uname" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" name="psw" required>
    
    <div class="button-group">
      <button type="submit" name="login">Login</button>
    </div>
  </form>
</body>
</html>
