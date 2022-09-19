<?= $this->extend('App\Modules\User\Views\Layout\Template'); ?>

<?= $this->section('content'); ?>

<div class="container">
     <div class="header-container">
          <h1>Grafik Kemiskinan</h1>
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
     </div>
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
                    <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
               </div>
          </div>
          <!-- /.card-body -->
     </div>
</div>
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script>
     $(function() {
          var areaChartData = {
               labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
               datasets: [{
                         label: 'Digital Goods',
                         backgroundColor: 'rgba(60,141,188,0.9)',
                         borderColor: 'rgba(60,141,188,0.8)',
                         pointRadius: false,
                         pointColor: '#3b8bba',
                         pointStrokeColor: 'rgba(60,141,188,1)',
                         pointHighlightFill: '#fff',
                         pointHighlightStroke: 'rgba(60,141,188,1)',
                         data: [28, 48, 40, 19, 86, 27, 90]
                    },
                    {
                         label: 'Electronics',
                         backgroundColor: 'rgba(210, 214, 222, 1)',
                         borderColor: 'rgba(210, 214, 222, 1)',
                         pointRadius: false,
                         pointColor: 'rgba(210, 214, 222, 1)',
                         pointStrokeColor: '#c1c7d1',
                         pointHighlightFill: '#fff',
                         pointHighlightStroke: 'rgba(220,220,220,1)',
                         data: [65, 59, 80, 81, 56, 55, 40]
                    },
               ]
          }

          var barChartCanvas = $('#barChart').get(0).getContext('2d')
          var barChartData = $.extend(true, {}, areaChartData)
          var temp0 = areaChartData.datasets[0]
          var temp1 = areaChartData.datasets[1]
          barChartData.datasets[0] = temp1
          barChartData.datasets[1] = temp0

          var barChartOptions = {
               responsive: true,
               maintainAspectRatio: false,
               datasetFill: false
          }

          new Chart(barChartCanvas, {
               type: 'bar',
               data: barChartData,
               options: barChartOptions
          })

     });
</script>
<?= $this->endSection() ?>