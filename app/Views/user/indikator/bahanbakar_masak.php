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
          </div><?= $this->extend('/user/layout/index') ?>

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
          <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script> -->
          <?= $this->endSection() ?>


          <?= $this->section('content') ?>
          <div class="wraper">
               <div id="content-wrapper" class="d-flex flex-column">
                    <div class="content">
                         <div class="container-fluid">
                              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                   <h1 class="h3 mb-0 text-gray-800">Grafik Total Data Bahan Bakar Masak</h1>
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
                                                                 Listrik</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak1; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
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
                                                                 Gas > 3 Kg</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak2; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-tree fa-2x text-gray-300"></i>
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
                                                                 Gas 3 Kg</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak3; ?></div>
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
                                                                 Gas kota</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak4; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
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
                                                                 Minyak tanah</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak5; ?></div>
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
                                                                 Briket</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak6; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
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
                                                                 Arang</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak7; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
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
                                                                 Kayu Bakar</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak8; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
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
                                                                 Tidak memasak di rumah</div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahanbakarMasak9; ?></div>
                                                       </div>
                                                       <div class="col-auto">
                                                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
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
                              label: 'Listrik',
                              backgroundColor: [
                                   "rgba(255, 0, 0)",
                              ],
                              borderColor: [
                                   "rgba(255, 0, 0, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak1]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }, {
                              label: 'Gas > 3 Kg',
                              backgroundColor: [
                                   "rgba(255, 200, 0)",
                              ],
                              borderColor: [
                                   "rgba(255, 200, 0, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak2]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }, {
                              label: 'Gas 3 Kg',
                              backgroundColor: [
                                   "rgba(0, 255, 153)",
                              ],
                              borderColor: [
                                   "rgba(0, 255, 153, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak3]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }, {
                              label: 'Gas kota',
                              backgroundColor: [
                                   "rgba(0, 174, 255)",
                              ],
                              borderColor: [
                                   "rgba(0, 174, 255, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak4]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }, {
                              label: 'Minyak tanah',
                              backgroundColor: [
                                   "rgba(13, 0, 255)",
                              ],
                              borderColor: [
                                   "rgba(13, 0, 255, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak5]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }, {
                              label: 'Briket',
                              backgroundColor: [
                                   "rgba(255, 0, 234)",
                              ],
                              borderColor: [
                                   "rgba(255, 0, 234, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak6]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }, {
                              label: 'Arang',
                              backgroundColor: [
                                   "rgba(255, 125, 80)",
                              ],
                              borderColor: [
                                   "rgba(255, 125, 80, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak7]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         },
                         {
                              label: 'Kayu Bakar',
                              backgroundColor: [
                                   "rgba(44, 178, 65)",
                              ],
                              borderColor: [
                                   "rgba(44, 178, 65, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak8]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         },
                         {
                              label: 'Tidak memasak di rumah',
                              backgroundColor: [
                                   "rgba(75, 125, 77)",
                              ],
                              borderColor: [
                                   "rgba(75, 125, 77, 0.7)",
                              ],
                              data: labels.map((val) => {
                                   return [val.bahanbakar_masak9]
                              }),
                              borderWidth: 1,
                              cutout: '90%'
                         }
                    ],
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