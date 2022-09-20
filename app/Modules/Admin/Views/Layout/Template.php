<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
     <!-- CSS only -->
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
     <title>Document</title>
</head>

<body>
     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4">

          <!-- Sidebar -->
          <div class="sidebar-admin">

               <!-- Sidebar Menu -->
               <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                         <li class="nav-item has-treeview menu-open">
                              <ul class="nav nav-treeview">
                                   <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                             <p>Data Page</p>
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                             <p>Input Page</p>
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                             <p>Active Page</p>
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                             <p>Active Page</p>
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                             <p>Active Page</p>
                                        </a>
                                   </li>
                              </ul>
                         </li>
                         <div class="info-admin">
                              <a href="#" class="d-block">Alexander Pierce</a>
                         </div>
                         <li class="nav-item">
                              <a href="<?= base_url('login/logout') ?>" class="nav-link active">
                                   <p>Logout</p>
                              </a>
                         </li>
                    </ul>
               </nav>

               <!-- <div class="info">
                         <a href="#" class="d-block">Alexander Pierce</a>
                    </div> -->
               <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
     </aside>
     <main>
          <?= $this->renderSection('content'); ?>
     </main>

     <footer>
          <div class="footer">
               <h1 class="copyright-admin">&copy; Copyright M Fajar Aditya, Siti Roziana Azizah, Almira Syahadati Arsya</h1>
          </div>
     </footer>
</body>

</html>