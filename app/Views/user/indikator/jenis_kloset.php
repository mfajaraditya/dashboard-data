<?= $this->extend('/user/layout/index') ?>
<?= $this->section('css') ?>
<link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
<link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<script src="<?= base_url('plugins/moment/moment.min.j'); ?>s"></script>
<script src="<?= base_url('plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="wraper">
     <div id="content-wrapper" class="d-flex flex-column">
          <div class="content">
               <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                         <h1 class="h3 mb-0 text-gray-800">Grafik Total Data Jenis Kloset</h1>
                    </div>
                    <div class="row">
                         <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                   <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                       Total Data</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_data; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-server fa-2x text-gray-300"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-success shadow h-100 py-2">
                                   <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                       Leher angsa</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenisKloset1; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-toilet fa-2x text-gray-300"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                   <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                       Plengsengan</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenisKloset2; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-toilet fa-2x text-gray-300"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-success shadow h-100 py-2">
                                   <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                       Cemplung/cubluk</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenisKloset3; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-tree fa-2x text-gray-300"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="col-xl-3 col-md-6 mb-4">
                              <div class="card border-left-primary shadow h-100 py-2">
                                   <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                       Tidak pakai</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jenisKloset4; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-question fa-2x text-gray-300"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="card shadow mb-4">
                         <div class="card-header py-3 border-bottom-dark">
                              <h6 class="m-0 font-weight-bold text-primary"><?= $title; ?></h6>
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
</div>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script>
     const labels = <?= json_encode($data_kabkota) ?>;
     const data = {
          labels: labels.map((val) => {
               return [val.kabkota]
          }),
          datasets: [{
               label: 'Leher angsa',
               backgroundColor: [
                    "rgba(255, 200, 0)",
               ],
               borderColor: [
                    "rgba(255, 200, 0, 0.7)",
               ],
               data: labels.map((val) => {
                    return [val.jenis_kloset1]
               }),
               borderWidth: 1,
               cutout: '90%'
          }, {
               label: 'Plengsengan',
               backgroundColor: [
                    "rgba(0, 255, 153)",
               ],
               borderColor: [
                    "rgba(0, 255, 153, 0.7)",
               ],
               data: labels.map((val) => {
                    return [val.jenis_kloset2]
               }),
               borderWidth: 1,
               cutout: '90%'
          }, {
               label: 'Cemplung/cubluk',
               backgroundColor: [
                    "rgba(0, 174, 255)",
               ],
               borderColor: [
                    "rgba(0, 174, 255, 0.7)",
               ],
               data: labels.map((val) => {
                    return [val.jenis_kloset3]
               }),
               borderWidth: 1,
               cutout: '90%'
          }, {
               label: 'Tidak pakai',
               backgroundColor: [
                    "rgba(13, 0, 255)",
               ],
               borderColor: [
                    "rgba(13, 0, 255, 0.7)",
               ],
               data: labels.map((val) => {
                    return [val.jenis_kloset4]
               }),
               borderWidth: 1,
               cutout: '90%'
          }],
     };
     const config = {
          type: "bar",
          data: data,
          options: {
               maintainAspectRatio: false
          },
     };
     const myBarChart = new Chart(document.getElementById("myBarChart"), config);
</script>
<?= $this->endSection() ?>