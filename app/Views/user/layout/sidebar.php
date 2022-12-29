<?php
$uri = service('uri');
?>
<hr class="sidebar-divider my-0">
<div class="sidebar-heading mt-4">
    Indikator
</div>
<li class="nav-item <?= $uri->getSegment(2) === '1' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/1') ?>">
        <i class="fas fa-square fa-2x text-gray-300"></i>
        <span>Jenis Lantai</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '2' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/2') ?>">
        <i class="fas fa-house-user fa-2x text-gray-300"></i>
        <span>Jenis Dinding</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '3' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/3') ?>">
        <i class="fas fa-toilet fa-2x text-gray-300"></i>
        <span>Fasilitas BAB</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '4' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/4') ?>">
        <i class="fas fa-lightbulb fa-2x text-gray-300"></i>
        <span>Sumber Penerangan</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '5' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/5') ?>">
        <i class="fas fa-bottle-water fa-2x text-gray-300"></i>
        <span>Sumber Air Minum</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '6' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/6') ?>">
        <i class="fas fa-fire fa-2x text-gray-300"></i>
        <span>Bahan Bakar Masak</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '7' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/7') ?>">
        <i class="fas fa-bolt fa-2x text-gray-300"></i>
        <span>Daya Listrik</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '8' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/8') ?>">
        <i class="fas fa-person-shelter fa-2x text-gray-300"></i>
        <span>Jenis Atap</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '9' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/9') ?>">
        <i class="fas fa-restroom fa-2x text-gray-300"></i>
        <span>Jenis Kloset</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === '10' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas/10') ?>">
        <i class="fas fa-person-shelter fa-2x text-gray-300"></i>
        <span>Kondisi Atap</span>
    </a>
</li>
<hr class="sidebar-divider my-0">
<div class="sidebar-heading mt-4">
    Tabel
</div>
<li class="nav-item <?= $uri->getSegment(1) === '' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('fasilitas') ?>">
        <i class="fas fa-table fa-2x text-gray-300"></i>
        <span>Tabel</span>
    </a>
</li>
<hr class="sidebar-divider d-none d-md-block">