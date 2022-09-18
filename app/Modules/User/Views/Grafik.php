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
          <!-- <div class="chartBox">
                         <canvas id="myChart"></canvas>
                    </div> -->
     </div>
     
</div>




<!-- <div class="grafik-content">
                    <div class="chartBox">
                         <canvas id="myChart"></canvas>
                    </div>
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <script>
          // SETUP BLOCK


          const data = {
               labels: labelaxis,
               datasets: [{
                    label: 'Pendapatan',
                    data: revenue,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
               }, {
                    label: 'Profit',
                    data: profit,
                    backgroundColor: 'rgba(22, 188, 61, 0.2)',
                    borderColor: 'rgba(22, 188, 61, 1)',
                    borderWidth: 1
               }, {
                    label: 'Biaya',
                    data: cost,
                    backgroundColor: 'rgba(203, 16, 16, 0.2)',
                    borderColor: 'rgba(203, 16, 16, 1)',
                    borderWidth: 1
               }]
               
          };
          // CONFIG Block
          const config = {
               type: 'bar',
               data,
               options: {
                    scales: {
                         y: {
                              beginAtZero: true
                         }
                    }
               }
          };
          // RENDER Block
          const myChart = new Chart(
               document.getElementById('myChart'),
               config
          );

          function showData(num) {
               const pendapatanSliced = pendapatan.slice(0, num);
               const labelaxisSliced = labelaxis.slice(0, num);
               myChart.data.datasets[0].data = pendapatanSliced;
               myChart.data.labels = labelaxisSliced;
               myChart.update();
          }

          function resetData() {
               myChart.data.datasets[0].data = pendapatan;
               myChart.data.labels = labelaxis;
               myChart.update();
          }
     </script>
               </div> -->

<?= $this->endSection(); ?>