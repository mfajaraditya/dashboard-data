<?= $this->extend('layout/index') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card-body">
     <div class="chart">
          <canvas id="barChart"></canvas>
          <div class="card card-success">
               <div class="card-header">
                    <h3 class="card-title">Bar Chart</h3>
                    <div class="card-tools">
                         <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                         </button>
                         <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                         </button>
                    </div>
               </div>

               <div class="card-body">
                    <div class="chart">
                         <canvas id="myChart"></canvas>
                    </div>
                    <div>
                         <?php
                         if ($total) :
                              foreach ($total as $t) :
                                   $penduduk_nama[] = $t['penduduk_nama'];
                                   $jam_kerja[] = $t['jam_kerja'];
                              endforeach;
                         endif;
                         ?>
                    </div>
               </div>
               <!-- /.card-body -->
          </div>
          <!-- /.card-body -->
     </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<script>
          // const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October'];
          const labels = <?php echo json_encode($penduduk_nama) ?> 
          const data = {
               labels: labels,
               datasets: [{
                    label: 'Database Test',
                    backgroundColor: [
                         'rgba(255, 99, 132, 0.7)',
                         'rgba(255, 159, 64, 0.7)',
                         'rgba(255, 205, 86, 0.7)',
                         'rgba(75, 192, 192, 0.7)',
                         'rgba(54, 162, 235, 0.7)',
                         'rgba(153, 102, 255, 0.7)',
                         'rgba(201, 203, 207, 0.7)'
                    ],
                    borderColor: [
                         'rgb(255, 99, 132)',
                         'rgb(255, 159, 64)',
                         'rgb(255, 205, 86)',
                         'rgb(75, 192, 192)',
                         'rgb(54, 162, 235)',
                         'rgb(153, 102, 255)',
                         'rgb(201, 203, 207)'
                    ],
                    // data: [28, 48, 40, 19, 86, 27, 90],
                    data: <?php echo json_encode($jam_kerja)  ?>
               }]
          };

          const config = {
               type: 'bar',
               data: barChartData,
               options: barChartOptions
          }

          const myChart = new Chart(
               document.getElementById('myChart'),
               config
          );
     </script>
<?= $this->endSection() ?>