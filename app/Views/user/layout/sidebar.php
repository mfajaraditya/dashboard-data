<?php
$uri = service('uri');
?>
<hr class="sidebar-divider my-0">
<div class="sidebar-heading mt-4">
    Indikator
</div>
<li class="nav-item <?= $uri->getSegment(2) === 'jenis_lantai' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/jenis_lantai') ?>">
        <i class="fas fa-square fa-2x text-gray-300"></i>
        <span>Jenis Lantai</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'jenis_dinding' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/jenis_dinding') ?>">
        <i class="fas fa-house-user fa-2x text-gray-300"></i>
        <span>Jenis Dinding</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'fasilitas_bab' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/fasilitas_bab') ?>">
        <i class="fas fa-toilet fa-2x text-gray-300"></i>
        <span>Fasilitas BAB</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'sumber_penerangan' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/sumber_penerangan') ?>">
        <i class="fas fa-lightbulb fa-2x text-gray-300"></i>
        <span>Sumber Penerangan</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'sumber_airminum' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/sumber_airminum') ?>">
        <i class="fas fa-bottle-water fa-2x text-gray-300"></i>
        <span>Sumber Air Minum</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'bahanbakar_masak' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/bahanbakar_masak') ?>">
        <i class="fas fa-fire fa-2x text-gray-300"></i>
        <span>Bahan Bakar Masak</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'daya_listrik' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/daya_listrik') ?>">
        <i class="fas fa-bolt fa-2x text-gray-300"></i>
        <span>Daya Listrik</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'jenis_atap' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/jenis_atap') ?>">
        <i class="fas fa-person-shelter fa-2x text-gray-300"></i>
        <span>Jenis Atap</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'jenis_kloset' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/jenis_kloset') ?>">
        <i class="fas fa-restroom fa-2x text-gray-300"></i>
        <span>Jenis Kloset</span>
    </a>
</li>
<li class="nav-item <?= $uri->getSegment(2) === 'kondisi_atap' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('indikator/kondisi_atap') ?>">
        <i class="fas fa-person-shelter fa-2x text-gray-300"></i>
        <span>Kondisi Atap</span>
    </a>
</li>
<hr class="sidebar-divider my-0">
<div class="sidebar-heading mt-4">
    Tabel
</div>
<li class="nav-item <?= $uri->getSegment(1) === 'tabel' ? 'active' : '' ?>">
    <a class="nav-link" href="<?= base_url('tabel') ?>">
        <i class="fas fa-table fa-2x text-gray-300"></i>
        <span>Tabel</span>
    </a>
</li>
<hr class="sidebar-divider d-none d-md-block">