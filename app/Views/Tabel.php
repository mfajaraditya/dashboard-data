<?= $this->extend('App\Modules\User\Views\Layout\Template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <div class="header-container">
          <h1>Tabel Kemiskinan</h1>
     </div>
     <div class="info-container">
          <div class="info">
               <div class="header-info">
                    <p>Total Data</p>
               </div>
               <div class="content-info">
                    <p><?php echo $total_data; ?></p>
               </div>
          </div>
          <div class="info">
               <div class="header-info">
                    <p>Data Penduduk Miskin</p>
               </div>
               <div class="content-info">
                    <p>20.000 Jiwa</p>
               </div>
          </div>
          <div class="info">
               <div class="header-info">
                    <p>Data Penduduk Tidak Miskin</p>
               </div>
               <div class="content-info">
                    <p>20.000 Jiwa</p>
               </div>
          </div>
     </div>
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
</div>
<?= $this->endSection(); ?>