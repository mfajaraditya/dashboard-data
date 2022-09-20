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
                    <p>20.000 Jiwa</p>
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
          <!-- <div class="chartBox">
                         <canvas id="myChart"></canvas>
                    </div> -->
     </div>


     <div class="row">
          <div class="col">
               <h1 class="my-3 mt-3">Data Tabel Kemiskinan</h1>
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Jam Kerja</th>

                    </thead>
                    <tbody>
                         <?php $i = 1; ?>
                         <?php foreach ($total as $t) : ?>
                              <th scope="row"><?= $i++; ?></th>
                              <td><?= $t['daya_listrik_nama']; ?></td>
                              </tr>
                         <?php endforeach; ?>

                    </tbody>
               </table>
          </div>
     </div>
</div>
<?= $this->endSection(); ?>