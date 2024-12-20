<?php
// Langkah 1. Memulai session PHP.
// harus dimulai pertama kali untuk mencegah eror
// 'headers already sent'
session_start();

// Langkah 2. Memeriksa jika pengguna belum login
// dengan memeriksa nilai session
if(empty($_SESSION['logged_in']))
{
  // jika nilai session kosong, pengguna belum Login
  // alihkan ke halaman Login
  header('Location: login.php?action=not_yet-logged_in');
}
?>
<html>

<head>
  <title>Login Berhasil</title>
  <link type="text/css" rel="stylesheet" href="css/style.css" />
</head>

<body>
  <?php

  ?>
</body>

</html>