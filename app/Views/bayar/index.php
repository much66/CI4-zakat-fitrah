<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-1">
  <div class="row">
    <div class="col">
      <hr style="color: dimgray;">
      <h1 style="text-align: center;">Pembayaran Zakat</h1>
      <hr style="color: dimgray;">
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-primary" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>
      <?php endif; ?>
      <form action="/bayar/save" method="post">
        <label for="nama_KK">Nama KK</label>
        <select class="form-select mt-2 mb-2" data-search="true" id="nama_KK" name="nama" aria-label="Default select example">
          <option selected hidden>-- Pilih Nama Kepala Keluarga --</option>
          <?php foreach ($bayar as $b) : ?>
            <option value='{"value1":"<?= $b['nama_muzakki']; ?>", "value2":"<?= $b['jumlah_tanggungan']; ?>"}'><?= $b['nama_muzakki'], " | Tanggungan : ", $b['jumlah_tanggungan']; ?></option>
          <?php endforeach; ?>
        </select>
        <!-- <div class="mb-2 mt-2 ">
          <label for="jumlah_tanggungan" class="form-label">Jumlah Tanggungan</label>
          <input type="text" class="form-control" id="jumlah_tanggungan" name="jumlah_tanggungan">
        </div> -->
        <div class="mb-2">
          <label for="jenis_bayar">Jenis Pembayaran Zakat</label>
          <select class="form-select mt-2" id="jenis_bayar" name="jenis_bayar" aria-label="Default select example">
            <option selected hidden>-- Pilih Jenis Bayar --</option>
            <option value="beras">Beras</option>
            <option value="uang">Uang</option>
          </select>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center mt-2">
            <button type="submit" class="btn btn-success">Bayarkan Zakat</button>
          </div>
        </div>
      </form>
      <a href="/bayar/data" class="btn btn-secondary mt-2">Lihat Data Pembayaran</a>
    </div>
  </div>
</div>
<script>

    var select_box_element = document.querySelector('#jenis_bayar');

    dselect(select_box_element, {
        search: true
    });

</script>
<?= $this->endSection(''); ?>