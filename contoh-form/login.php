<div?php // Langkah 1. Memulai session PHP. // harus dimulai pertama kali untuk mencegah error // 'headers already sent'
  session_start(); // Langkah 2. Memeriksa jika pengguna sudah login // dengan memeriksa nilai session
  if($SESSION['logged_in']==true) { // jika sudah, alihkan pengguna pada halaman index // dan beritahu bahwa pengguna
  sudah login header('Location: index.php?action=already_logged_in'); } ?>

  <html>

  <head>
    <title>
      Script login PHP
    </title>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <div id="loginForm">

      <?php
  // Langkah 3. Memeriksa action dan menampilkan pesan yang sesuai
  f($GET['action']=='not_yet_logged_in')
  {
    echo "<div id='infoMessage'>Anda belum login.</div>";
  }
  // Langkah 4. Memeriksa jika pengguna sudah mengklik
  // tombol'login' dengan memeriksa variabel PHP $_POST
  if($_POST)
  {
    // username dan password berikut hanyalah contoh
    // password harus dienkripsi supaya aman
    $username = 'antoni';
    $password = 'tampansekali';

    // memeriksa apakah username dan password
    // yang dimasukan sesuai
    if($_POST['username']==$username &&
    $_POST['password']==$password)
    {
      // jika sesuai, atur nilai session menjadi true
      $SESSION['logged_in'] = true
      // dan alihkan ke halaman index
      header('Location: index.php');
    }
    else
    {
      // jika tidak sesuai, beritahu pengguna bahwa
      // akses ditolak.
      echo "<div id='faileMessage'>Akses Ditolak.
      :(</div>"
    }
  }
  ?>
      <!-- tempat pengguna memasukan username dan password -->
      <form action="login.php" method="post">
        <div id="formHeader">Login</div>
        <div id="formBody">
          <div class="formField">
            <input type="text" name="username" placeholder="username" />
          </div>
          <div class="formField">
            <input type="password" name="password" placeholder="password" />
          </div>
          <div>
            <input type="submit" value="Login" class="customButton" />
          </div>
        </div>
        <div id="userNote">
          <div>Username: antoni</div>
          <div>Password: tampansekali</div>
          <div><a href="index.php">Pergi ke halaman utama</a></div>
        </div>
      </form>
    </div>
  </body>

  </html>