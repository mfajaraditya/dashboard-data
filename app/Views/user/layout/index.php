<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/img/logo.ico" />
    <link href="<?= base_url('template') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('plugins') ?>/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('plugins') ?>/fontawesome-free/css/brands.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('plugins') ?>/fontawesome-free/css/fontawesome.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('plugins') ?>/fontawesome-free/css/regular.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('plugins') ?>/fontawesome-free/css/solid.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('template') ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <title><?= $title; ?></title>
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion">
            <a class="sidebar-brand d-flex align-items-center justify-content-center mx-2" href="/">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-fw fa-chart-bar"></i>
                </div>
            <div class="sidebar-brand-text mx-3">
                <span>Data Visualization</span>
            </div>
                
            </a>
            <?= $this->include('user/layout/sidebar') ?>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid pt-5">
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