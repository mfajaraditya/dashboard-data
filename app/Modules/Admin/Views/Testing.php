<?= $this->extend('App\Modules\Admin\Views\Layout\Template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <div class="container-fluid">
          <div class="row">
               <div class="col-12">
                    <div class="card">
                         <div class="card-header">
                              <h3 class="card-title">DataTable with default features</h3>
                         </div>
                         <!-- /.card-header -->
                         <div class="card-body">
                              <table id="example1" class="table table-bordered table-striped">
                                   <thead>
                                        <tr>
                                             <th scope="col">No.</th>
                                             <th scope="col">Nama</th>
                                             <th scope="col">Umur</th>
                                             <th scope="col">Jam Kerja</th>
                                             <th scope="col">Aksi</th>
                                        </tr>
                                   </thead>
                                   <tbody>
                                        <tr>
                                             <?php $i = 1; ?>
                                             <?php foreach ($tabel as $t) : ?>
                                                  <th scope="row"><?= $i++; ?></th>
                                                  <td><?= $t['nama']; ?></td>
                                                  <td><?= $t['umur']; ?></td>
                                                  <td><?= $t['jam_kerja']; ?></td>
                                                  <td><a href="<?= base_url('testing/update') . '/' .$t['id']; ?>">
                                                            <i class="bi bi-pencil-square" id="edit"></i>
                                                       </a>
                                                       |
                                                       <a href="<?= base_url('testing/delete') .'/' .$t['id']; ?>">
                                                            <i class="bi bi-trash3-fill" id="delete"></i>
                                                       </a>
                                                  </td>
                                        </tr>
                                   <?php endforeach; ?>
                                   </tbody>
                                   <tfoot>
                                        <tr>
                                             <th scope="col">No.</th>
                                             <th scope="col">Nama</th>
                                             <th scope="col">Jam Kerja</th>
                                             <th scope="col">Aksi</th>
                                        </tr>
                                   </tfoot>
                              </table>
                         </div>
                         <!-- /.card-body -->
                    </div>
               </div>
          </div>
     </div>
</div>

<?= $this->endSection(); ?>