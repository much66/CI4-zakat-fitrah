<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-1">
  <div class="row">
    <div class="col">
      <h1 style="text-align: center;">Daftar Muzakki Hifdul</h1>
      <hr style="color: dimgray;">
      <div class="col-12">
        <form action="" method="post">
          <div class="input-group mb-4">
            <input type="text" class="form-control" style="width:300px;" name="keyword" placeholder="Masukkan Keyword Pencarian...." aria-label="Masukkan keyword pencarian..." aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary rounded" type="submit" name="submit" id="button-addon2">Cari</button>
            <a href="/zakat/create" class="btn btn-success ms-3 rounded">Tambah Muzakki</a>
          </div>
        </form>
      </div>
      <div class="col-8"></div>
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <table class="table table-bordered text-center">
        <thead>
          <tr>
            <th scope="col">No <span><i class="fa-solid fa-sort"></i></span></th>
            <th scope="col">Nama <span><i class="fa-solid fa-sort"></i></span></th>
            <th scope="col">Jumlah Tanggungan <span><i class="fa-solid fa-sort"></i></span></th>
            <th scope="col">Keterangan <span><i class="fa-solid fa-sort"></i></span></th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($zakat as $z) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td class="text-start"><?= $z['nama_muzakki']; ?></td>
              <td><?= $z['jumlah_tanggungan']; ?></td>
              <td><?= $z['keterangan']; ?></td>
              <td><a href="/zakat/edit/<?= $z['id']; ?>" class="btn btn-warning">edit</a> |
                <form action="/zakat/<?= $z['id']; ?>" method="post" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $pager->links('warga', 'warga_pagination'); ?>
    </div>
  </div>
</div>

<?= $this->endSection(''); ?>