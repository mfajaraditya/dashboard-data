<?= $this->extend('App\Modules\Admin\Views\Layout\Template'); ?>

<?= $this->section('content'); ?>
<div class="container">
     <form action="<?= base_url('testing/edit') . '/' .$edit['id']; ?>" method="post">
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Nama</label>
               <input type="text" class="form-control" name="nama" placeholder="<?= $edit['nama']; ?>">
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Umur</label>
               <input type="text" class="form-control" name="umur" placeholder="<?= $edit['umur']; ?>">
          </div>
          <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Jam Kerja</label>
               <input type="text" class="form-control" name="jam_kerja" placeholder="<?= $edit['jam_kerja']; ?>">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
     </form>
</div>
<?= $this->endSection(); ?>