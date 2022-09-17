<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="/css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
     <title>Document</title>
</head>

<body>
     <!-- Sidebar -->
     <div class="sidebar">
          <div class="logo-content">
               <img src="/img/logo.png">
          </div>
          <div class="sidebar-menu">
               <div class="pilih-menu">
                    <div class="select-active-dashboard" id="dashboard">
                         <!-- <i class='bx bx-grid-alt'></i> -->
                         <p>Dashboard</p>
                    </div>
                    <div class="select-active" id="table">
                         <a></a>
                         <p>Tabel</p>
                         <!-- <i class='bx bx-table'></i> -->
                    </div>
                    <div class="select-active" id="admin">
                         <p>Admin</p>
                         <!-- <i class='bx bx-table'></i> -->
                    </div>
                    <div class="select-active" id="login">
                         <a>Login</a>
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
     <script src="/js/index.js"></script>
</body>

</html>