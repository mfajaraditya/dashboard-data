<?= $this->extend('/admin/layout/index') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="wrapper">
     <div id="content">
          <div class="container-fluid">
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Grafik Kemiskinan</h1>
               </div>
               <div class="row">
               </div>
          </div>
     </div>
</div>
<?= $this->endSection() ?>