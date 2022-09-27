<?= $this->extend('/user/layout/index') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>" ?>
<link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- Theme -->
<link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css'); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>" ?>
<!-- iCheck -->
<link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
<!-- JQVMap -->
<link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<script src="<?= base_url('plugins/moment/moment.min.j'); ?>s"></script>
<script src="<?= base_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<script src="<?= base_url('js/index.js'); ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="wraper">
     <div id="content-wrapper" class="d-flex flex-column">
          <div class="content">
               <div class="card shadow mb-4">
                    <div class="card-header py-3">
                         <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                    </div>
                    <div class="card-body">
                         <div class="chart-bar">
                              <canvas id="myBarChart"></canvas>
                         </div>
                    </div>
               </div>

 
          </div>
     </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
<!-- <script>
     const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October'];

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
               data: [28, 48, 40, 19, 86, 27, 90],

          }]
     };

     const config = {
          type: 'bar',
          data: data,
          options: {}
     }

     const myChart = new Chart(
          document.getElementById('myChart'),
          config
     );
</script> -->
<?= $this->endSection() ?>