<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/login-signin.css">
</head>

<body>
  <div class="daftar-masuk">
    <div class="container-daftar-masuk">
      <h1>Masuk</h1>
      <h4>Belum punya akun? <a href="<?= base_url('/signup') ?>">Daftar Sekarang</a></h4>
      <div class="container-form-daftar-masuk">
        <div class="form-daftar-masuk">
          <p id="p_email"></p>
          <input type="text" placeholder="Username" class="input" id="email">
        </div>
        <div class="form-daftar-masuk">
          <p id="p_password"></p>
          <input type="password" placeholder="Password" class="input" id="password">
        </div>
      </div>
      <div class="masuk_button" id="masuk_button">
        <div class="button" id="masuk">
          <p>Masuk Sekarang</p>
        </div>
      </div>
    </div> 
  </div>
  <!-- <script src="../assets/js/login.js"></script> -->
</body>

</html>