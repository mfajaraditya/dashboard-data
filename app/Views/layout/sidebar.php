<?php
$uri = service('uri');
?>

<hr class="sidebar-divider my-0">
<li class="nav-item <?= $uri->getSegment(1) === 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(1) === 'table' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('table') ?>">
    <i class="fas fa-fw fa-table"></i>
        <span>Table</span>
    </a>
</li>
<hr class="sidebar-divider d-none d-md-block">