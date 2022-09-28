<?= $this->extend('/admin/layout/index') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="wrapper">
     <div id="content">
          <div class="container-fluid">
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Grafik Kemiskinan</h1>
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
                                                  Sangat Miskin</div>
                                             <div class="h5 mb-0 font-weight-bold text-gray-800">7000</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                         <div class="card border-left-info shadow h-100 py-2">
                              <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                  Miskin Menengah</div>
                                             <div class="h5 mb-0 font-weight-bold text-gray-800">80000</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                         <div class="card border-left-warning shadow h-100 py-2">
                              <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                  Tidak Miskin</div>
                                             <div class="h5 mb-0 font-weight-bold text-gray-800">20000</div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-arrow-up fa-2x text-gray-300"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?= $this->endSection() ?>