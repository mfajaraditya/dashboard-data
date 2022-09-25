<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
     <!-- CSS only -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <!-- Theme -->
     <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css'); ?>">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Tempusdominus Bootstrap 4 -->
     <link rel="stylesheet" href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>" ?>
     <!-- iCheck -->
     <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
     <!-- JQVMap -->
     <link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
     <title><?= $title; ?></title>
</head>

<body>
     <!-- Sidebar -->
     <div class="sidebar">
          <div class="logo-content">
               <img src="/img/logo.png">
          </div>
          <div class="sidebar-menu">
               <div class="pilih-menu">
                    <div class="select-active" id="dashboard">
                         <!-- <i class='bx bx-grid-alt'></i> -->
                         <a href="<?= base_url("/") ?>">Dashboard</a>
                    </div>
                    <div class="select-active" id="table">
                         <a></a>
                         <a href="<?= base_url("/tabel") ?>">Tabel</a>
                         <!-- <i class='bx bx-table'></i> -->
                    </div>
                    <div class="select-active" id="login">
                         <a href="<?= base_url("/login") ?>">Login</a>
                         <!-- <i class='bx bx-table'></i> -->
                    </div>
               </div>
          </div>
     </div>
     <main>
          <?= $this->renderSection('content'); ?>
     </main>
     <footer>
          <div class="footer">
               <h1 class="copyright">&copy; Copyright M Fajar Aditya, Siti Roziana Azizah, Almira Syahadati Arsya</h1>
          </div>
     </footer>
     <!-- ChartJS -->
     <script src="<?= base_url('plugins/chart.js/Chart.min.js'); ?>"></script>
     <!-- JQuery -->
     <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
     <!-- Bootstrap -->
     <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
     <!-- AdminLTE -->
     <script src="<?= base_url('plugins/adminlte/adminlte.min.js'); ?>"></script>
     <!-- Sparkline -->
     <script src="<?= base_url('plugins/sparklines/sparkline.js'); ?>"></script>
     <!-- JQVMap -->
     <script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
     <script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
     <!-- jQuery Knob Chart -->
     <script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
     <!-- daterangepicker -->
     <script src="<?= base_url('plugins/moment/moment.min.j'); ?>s"></script>
     <script src="<?= base_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>
     <!-- Tempusdominus Bootstrap 4 -->
     <script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
     <!-- Summernote -->
     <script src="<?= base_url('plugins/summernote/summernote-bs4.min.js'); ?>"></script>
     <!-- overlayScrollbars -->
     <script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
     <!-- <script src="/js/index.js"></script> -->
</body>

</html>