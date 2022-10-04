<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="<?= base_url('template') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
     <link href="<?= base_url('template') ?>/css/sb-admin-2.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/css/style.css">
     <title>User</title>
</head>

<body id="page-top">
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/user/dashboard">
            <div class="sidebar-brand-text mx-3">Dashboard</div>
        </a>
        <?= $this->include('user/layout/sidebar') ?>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?= $this->include('user/layout/navbar') ?>
            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
        <?= $this->include('user/layout/footer') ?>
    </div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<script src="<?= base_url('template') ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('template') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('template') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('template') ?>/js/sb-admin-2.min.js"></script>
<?= $this->renderSection('js') ?>
</body>

</html>