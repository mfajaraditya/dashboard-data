<?= $this->extend('/admin/layout/index') ?>

<?= $this->section('content'); ?>
<div class="wrapper">
     <div id="content">
          <div class="container-fluid">
               <div class="d-sm-flex align-items-center justify-content-between mb-5">
                    <h1 class="h2 mb-0 text-gray-800">Edit Data</h1>
               </div>
               <form action="<?= base_url('admin/edit') . '/' . $edit['id']; ?>" method="post">
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Nama:</label>
                         <input type="text" class="form-control" name="nama" placeholder="<?= $edit['nama']; ?>">
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Umur:</label>
                         <input type="text" class="form-control" name="umur" placeholder="<?= $edit['umur']; ?>">
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Jam Kerja:</label>
                         <input type="text" class="form-control" name="jam_kerja" placeholder="<?= $edit['jam_kerja']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>
          </div>
     </div>
</div>
<?= $this->endSection(); ?>