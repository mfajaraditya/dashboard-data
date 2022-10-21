<?= $this->extend('/user/layout/index') ?>

<?= $this->section('css') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<script src="<?= base_url('plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/dataTables.buttons.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('plugins/jszip/jszip.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/pdfmake.min.js'); ?>"></script>
<script src="<?= base_url('plugins/pdfmake/vfs_fonts.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.html5.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.print.min.js'); ?>"></script>
<script src="<?= base_url('plugins/datatables-buttons/js/buttons.colVis.min.js'); ?>"></script>
<script>
     $(function() {
          $("#example1").DataTable({
               "searching": false,
               "responsive": false,
               "lengthChange": false,
               "autoWidth": false,
               "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     });
</script>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="wrapper">
     <div id="content">
          <div class="container-fluid">
               <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tabel Kemiskinan</h1>
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
                                             <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_tinggi; ?></div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-arrow-down fa-2x text-gray-300"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                         <div class="card border-left-info shadow h-100 py-2">
                              <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                  Miskin Menengah</div>
                                             <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_menengah; ?></div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                         <div class="card border-left-warning shadow h-100 py-2">
                              <div class="card-body">
                                   <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                             <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                  Tidak Miskin</div>
                                             <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_rendah; ?></div>
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

<div class="card">
     <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
               <thead>
                    <tr>
                         <th scope="col">No.</th>
                         <th scope="col">Nama Kabupaten</th>
                         <th scope="col">Sangat Miskin</th>
                         <th scope="col">Miskin Menengah</th>
                         <th scope="col">Tidak Miskin</th>
                         <th scope="col">Total Data</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <?php $i = 1; ?>
                         <?php foreach ($data_kabkota as $t) : ?>
                              <th scope="row"><?= $i++; ?></th>
                              <td><?= $t['kotakab']; ?></td>
                              <td><?= $t['data_tinggi']; ?></td>
                              <td><?= $t['data_menengah']; ?></td>
                              <td><?= $t['data_rendah']; ?></td>
                              <td><?= $t['total_data']; ?></td>
                    </tr>
               <?php endforeach; ?>
               </tbody>
               <tfoot>
                    <tr>
                         <th scope="col"></th>
                         <th scope="col"></th>
                         <th scope="col"></th>
                         <th scope="col"></th>
                         <th scope="col">Total</th>
                         <th scope="col"><?= $total_data; ?></th>
                    </tr>
               </tfoot>
          </table>
     </div>
</div>
<?= $this->endSection() ?>