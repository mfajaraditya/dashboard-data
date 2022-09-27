<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title; ?></title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="/css/login-signin.css">
</head>

<body>
  <div class="daftar-masuk">
    <?= form_open(base_url('login/auth')) ?>
    <div class="container-daftar-masuk">
      <div class="header-masuk">
        <h1>LOG IN</h1>
      </div>

      <div class="container-form-daftar-masuk">
        <?php if (session()->getFlashdata('msg')) : ?>
          <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <div class="form-daftar-masuk">
          <p id="p_username"></p>
          <input type="text" placeholder="Username" class="input" id="username" name="username" value="<?= old('username') ?>">
        </div>
        <div class="form-daftar-masuk">
          <p id="p_password"></p>
          <input type="password" placeholder="Password" class="input" id="password" name="password" value="<?= old('password') ?>">
        </div>
      </div>
      <div class="masuk_button" id="masuk_button">
        <button type="submit" class="button">Masuk Sekarang</button>
      </div>
    </div>
    <?= form_close() ?>
  </div>
</body>

</html>