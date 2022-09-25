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
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
     <link rel="stylesheet" href="<?= base_url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'); ?>">
     <link rel="stylesheet" href="<?= base_url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css'); ?>">
     <link rel="stylesheet" href="<?= base_url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css'); ?>">
     <title><?= $title; ?></title>
</head>

<body>
     <div class="sidebar">
          <div class="sidebar-menu">
               <div class="info-admin">
                    <a href="#" class="d-block"><?= session()->name; ?></a>
               </div>
               <div class="pilih-menu">
                    <div class="select-active" id="dashboard">
                         <!-- <i class='bx bx-grid-alt'></i> -->
                         <a href="<?= base_url("admin") ?>">Data Page</a>
                    </div>
                    <div class="select-active" id="login">
                         <a href="#">Active Page</a>
                         <!-- <i class='bx bx-table'></i> -->
                    </div>

                    <div class="select-active">
                         <a href="<?= base_url('login/logout') ?>"">
                              <p>Logout</p>
                         </a>
                    </div>
               </div>
          </div>
     </div>

     <main>
          <?= $this->renderSection('content'); ?>
     </main>
     <footer>
          <div class=" footer">
                              <h1 class="copyright">&copy; Copyright M Fajar Aditya, Siti Roziana Azizah, Almira Syahadati Arsya</h1>
                    </div>
                    </footer>
                    <!-- jQuery -->
                    <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
                    <!-- Bootstrap 4 -->
                    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
                    <!-- DataTables  & Plugins -->
                    <script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/jszip/jszip.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/pdfmake/pdfmake.min.js"'); ?>"></script>
                    <script src="<?= base_url('plugins/pdfmake/vfs_fonts.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
                    <script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
                    <!-- AdminLTE App -->
                    <script src="../../dist/js/adminlte.min.js"></script>
                    <script>
                         $(function() {
                              $("#example1").DataTable({
                                   "responsive": false,
                                   "lengthChange": false,
                                   "autoWidth": false,
                                   "buttons": ["copy", "csv", "excel", "pdf", "print"]
                              }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                              $('#example2').DataTable({
                                   "paging": true,
                                   "lengthChange": false,
                                   "searching": false,
                                   "ordering": true,
                                   "info": true,
                                   "autoWidth": false,
                                   "responsive": true,
                              });
                         });
                    </script>
</body>

</html>