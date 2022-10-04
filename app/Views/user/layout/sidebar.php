<?php
$uri = service('uri');
?>

<hr class="sidebar-divider my-0">
<li class="nav-item <?= $uri->getSegment(2) === 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Indeks:</h6>
            <a class="collapse-item" href="<?= base_url('user/dashboard') ?>">Total Data</a>
            <a class="collapse-item" href="<?= base_url('user/dashboard') ?>">Jenis Lantai</a>
            <a class="collapse-item" href="<?= base_url('user/indikator/jenis_dinding') ?>">Jenis Dinding</a>
            <a class="collapse-item" href="#">Fasilitas MCK</a>
            <a class="collapse-item" href="#">Sumber Penerangan</a>
            <a class="collapse-item" href="#">Sumber Air Minum</a>
            <a class="collapse-item" href="#">Bahan Bakar Memasak</a>
            <a class="collapse-item" href="#">Daya Listrik</a>
            <a class="collapse-item" href="#">Jenis Atap</a>
            <a class="collapse-item" href="#">Jenis Kloset</a>
            <a class="collapse-item" href="#">Kondisi Atap</a>

        </div>
    </div>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'tabel' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('user/tabel') ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Table</span>
    </a>
</li>


<!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
        </div>
    </div>
</li> -->
<hr class="sidebar-divider d-none d-md-block">