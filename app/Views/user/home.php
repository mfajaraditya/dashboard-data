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
               <div class="card shadow mb-4">
                    <div class="card-header py-3 border-bottom-dark">
                         <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                    </div>
                    <div class="card-body">
                         <div class="chart-bar">
                              <canvas id="myBarChart"></canvas>
                         </div>
                         <div>
                              <?php
                              if ($total) :
                                   foreach ($total as $rev) :
                                        $nama_kab[] = $rev['nama_kab'];
                                        $kd_kab[] = $rev['kd_kab'];
                                        $persen[] = $rev['persen'];
                                        $kluster[] = $rev['kluster'];
                                   endforeach;
                              endif;
                              ?>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?= $this->endSection() ?>
<?= $this->section('js') ?>
<script>
     // const labels = [
     //      "January",
     //      "February",
     //      "March",
     //      "April",
     //      "May",
     //      "June",
     //      "July",
     //      "August",
     //      "September",
     //      "October",
     // ];

     const labels = <?php echo json_encode($nama_kab) ?>
     const total_data = <?php echo json_encode($total_tinggi) ?>

     const data = {
          labels: labels,
          datasets: [{
               label: 'Tinggi',
               backgroundColor: [
                    "rgba(0, 99, 132, 0.7)",
               ],
               borderColor: [
                    "rgb(0, 99, 132)",
               ],
               data: <?php echo json_encode($persen) ?>
          }, {
               label: 'Menengah',
               backgroundColor: [
                    "rgba(255, 0, 64, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 0, 64)",
               ],
               data: <?php echo json_encode($persen) ?>
          }, {
               label: 'Rendah',
               backgroundColor: [
                    "rgba(255, 205, 0, 0.7)",
               ],
               borderColor: [
                    "rgb(255, 205, 0)",
               ],
               data: <?php echo json_encode($persen) ?>
          }],
     };

     const config = {
          type: "bar",
          data: data,
          options: {
               maintainAspectRatio: false,
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

     const myChart = new Chart(document.getElementById("myBarChart"), config);
</script>
<?= $this->endSection() ?>