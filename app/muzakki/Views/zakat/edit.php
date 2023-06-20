<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Ubah Data Muzakki</h2>
            <form action="/zakat/update/<?= $zakat['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $zakat['id']; ?>">
                <div class="form-group">
                    <label for="nama_muzakki">Nama </label>
                    <input autocomplete="off" class="form-control <?= ($validation->hasError('nama_muzakki')) ? 'is-invalid' : ''; ?>" type="text" name="nama_muzakki" value="<?= (old('nama_muzakki')) ? old('nama_muzakki') : $zakat['nama_muzakki']; ?>" placeholder="Nama Lengkap Anda" id="username">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                    <input class="form-control <?= ($validation->hasError('jumlah_tanggungan')) ? 'is-invalid' : ''; ?>" type="text" name="jumlah_tanggungan" placeholder="Masukkan kata sandi" value="<?= (old('jumlah_tanggungan')) ? old('jumlah_tanggungan') : $zakat['jumlah_tanggungan']; ?>" id=" jumlah_tanggungan">
                </div>
                <div class="form-group">
                    <label for="jumlah_tanggungan">Keterangan</label>
                    <input class="form-control" type="text" name="keterangan" placeholder="Masukkan kata sandi" id="ket" value="<?= (old('keterangan')) ? old('keterangan') : $zakat['keterangan'];; ?>">
                </div>
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Ubah Data</button>
                <a href="/zakat"><button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>