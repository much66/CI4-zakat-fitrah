<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Ubah Data Distribusi Muzakki</h2>
            <form action="/bayar/update/<?= $bayar['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $bayar['id']; ?>">
                <div class="form-group">
                    <label for="nama">Nama Kepala Keluarga</label>
                    <input autocomplete="off" class="form-control" type="text" name="nama" value="<?= (old('nama')) ? old('nama') : $bayar['nama_KK']; ?>" placeholder="Nama Lengkap Anda" id="username">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                    <input class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" type="text" name="jumlah_tanggungan" placeholder="Masukkan Jumlah Tanggungan" value="<?= (old('jumlah_tanggungan')) ? old('jumlah_tanggungan') : $bayar['jumlah_tanggungan']; ?>" id="jumlah_tanggungan">
                </div>
                <div class="form-group">
                    <label for="jenis_bayar">Jenis Bayar</label>
                    <select class="form-select mt-2" id="jenis_bayar" name="jenis_bayar" aria-label="Default select example">
                        <option value="<?= $bayar['jenis_bayar']; ?>" selected><?= (old('jenis_bayar')) ? old('jenis_bayar') : $bayar['jenis_bayar']; ?></option>
                        <?= $bayar['jenis_bayar'] == 'beras' ?  '<option value="uang">uang</option>' : '<option value="beras">beras</option>' ?>
                    </select>
                </div>
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Ubah Data</button>
                <a href="/bayar"><button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>