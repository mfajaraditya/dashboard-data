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
          <h1 class="h3 mb-0 text-gray-800">Grafik Total Data <?= $title ?></h1>
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

          <?php foreach ($total_fasilitas as $row) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        <?= $row['nama_fasilitas'] ?>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $row['jumlah']; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-square fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        </div>

        <div class="card shadow mb-4">
          <div class="card-header py-3 border-bottom-dark">
            <h6 class="m-0 font-weight-bold text-primary"><?= $kategori['nama_kategori']; ?></h6>
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
  const kabupaten = <?= json_encode($kabupaten) ?>;
  const fasilitas = <?= json_encode($fasilitas) ?>;
  const kluster = <?= json_encode($kluster) ?>;

  const datasets = fasilitas.map(({ id_fasilitas, nama_fasilitas }) => {
    const data = kabupaten.map(({ nama_kabupaten }) => {
      const nilai = kluster[nama_kabupaten].filter((i) => i.id_fasilitas == id_fasilitas)[0]
      return nilai ? parseInt(nilai.jumlah) : 0
    })

    return {
      label: nama_fasilitas,
      data,
      borderWidth: 1,
      cutout: '90%'
    }
  });

  const data = {
    labels: kabupaten.map(({
      nama_kabupaten
    }) => {
      return [nama_kabupaten]
    }),
    datasets,
  };
  const config = {
    type: "bar",
    data: data,
    options: {
      maintainAspectRatio: false
    },
    plugins: {
      colors: {
        enabled: false,
        forceOverride: true
      }
    }
  };
  const myBarChart = new Chart(document.getElementById("myBarChart"), config);
</script>
<?= $this->endSection() ?>