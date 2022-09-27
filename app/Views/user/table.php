<?= $this->extend('layout/index') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card">
     <!-- /.card-header -->
     <div class="card-body">
          <h1 class="my-3 mt-3 ">Data Tabel Kemiskinan</h1>
          <table id="example1" class="table table-bordered table-striped">
               <thead>
                    <tr>
                         <th scope="col">No.</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Jam Kerja</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <?php $i = 1; ?>
                         <?php foreach ($total as $t) : ?>
                              <th scope="row"><?= $i++; ?></th>
                              <td><?= $t['penduduk_nama']; ?></td>
                              <td><?= $t['jam_kerja']; ?></td>
                    </tr>
               <?php endforeach; ?>
               </tbody>
               <tfoot>
                    <tr>
                         <th scope="col">No.</th>
                         <th scope="col">Nama</th>
                         <th scope="col">Jam Kerja</th>
                    </tr>
               </tfoot>
          </table>
     </div>
</div>
<?= $this->endSection() ?>