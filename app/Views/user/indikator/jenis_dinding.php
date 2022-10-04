<?= $this->extend('/user/layout/index') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css'); ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css'); ?>">
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
                         <h1 class="h3 mb-0 text-gray-800">Grafik Total Data Jenis Dinding</h1>
                         <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
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
                              <div class="card border-left-primary shadow h-100 py-2">
                                   <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                             <div class="col mr-2">
                                                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                       Tidak Diketahui</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding0; ?></div>
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
                                                       Tembok</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding1; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
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
                                                       Plesteran anyaman bambu/kawat</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding2; ?></div>
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
                                                       Kayu</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding3; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
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
                                                       Anyaman bambu</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding4; ?></div>
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
                                                       Batang kayu</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding5; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
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
                                                       Bambu</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding6; ?></div>
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
                                                       Lainnya</div>
                                                  <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $dinding7; ?></div>
                                             </div>
                                             <div class="col-auto">
                                                  <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="card shadow mb-4">
                         <div class="card-header py-3 border-bottom-dark">
                              <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                         </div>
                         <div class="card-body">
                              <div class="chart-bar">
                                   <canvas id="myBarChart"></canvas>
                              </div>
                         </div>
                    </div>
               </div>

               <!-- <div class="card shadow mb-4">
                    <div class="card-header py-3 border-bottom-dark">
                         <h6 class="m-0 font-weight-bold text-primary">Line Chart</h6>
                    </div>
                    <div class="card-body">
                         <div class="chart-bar">
                              <canvas id="myLineChart"></canvas>
                         </div>
                    </div>
               </div> -->
          </div>
     </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
     const labels = <?= json_encode($data_kabkota) ?>;
     const data = {
          labels: labels.map((val) => {
               return [val.kotakab]
          }),
          datasets: [{
               label: 'Tidak Diketahui',
               backgroundColor: [
                    "rgba(0, 99, 132, 0.7)",
               ],
               borderColor: [
                    "rgb(0, 99, 132)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding0]
               })
          }, {
               label: 'Tembok',
               backgroundColor: [
                    "rgba(255, 0, 64, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 0, 64)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding1]
               })
          }, {
               label: 'Plesteran anyaman bambu/kawat',
               backgroundColor: [
                    "rgba(255, 205, 0, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 205, 0)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding2]
               })
          }, {
               label: 'Kayu',
               backgroundColor: [
                    "rgba(0, 99, 132, 0.7)",
               ],
               borderColor: [
                    "rgb(0, 99, 132)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding3]
               })
          }, {
               label: 'Anyaman bambu',
               backgroundColor: [
                    "rgba(255, 0, 64, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 0, 64)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding4]
               })
          }, {
               label: 'Batang kayu',
               backgroundColor: [
                    "rgba(255, 205, 0, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 205, 0)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding5]
               })
          }, {
               label: 'Bambu',
               backgroundColor: [
                    "rgba(255, 205, 0, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 205, 0)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding6]
               })
          }, {
               label: 'Lainnya',
               backgroundColor: [
                    "rgba(255, 205, 0, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 205, 0)",
               ],
               data: labels.map((val) => {
                    return [val.data_dinding7]
               })
          }],
     };

     const config = {
          type: "bar",
          data: data,
          options: {
               maintainAspectRatio: false,
               indexAxis: 'x',
               layout: {
                    padding: {
                         left: 10,
                         right: 25,
                         top: 25,
                         bottom: 0,
                    },
               },
          },
     };

     const myBarChart = new Chart(document.getElementById("myBarChart"), config);
</script>
<?= $this->endSection() ?>