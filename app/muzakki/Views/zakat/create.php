<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Tambah Data Muzakki</h2>
            <form action="/zakat/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input class="au-input au-input--full" type="hidden" name="keterangan" placeholder="Masukkan kata sandi" id="ket" value="-">
                <div class="form-group">
                    <label for="nama_muzakki">Nama </label>
                    <input autocomplete="off" class="form-control <?= ($validation->hasError('nama_muzakki')) ? 'is-invalid' : ''; ?>" type="text" name="nama_muzakki" value="<?= old('nama_muzakki'); ?>" placeholder="Nama Lengkap Anda" id="username">
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class="form-group">
                    <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
                    <input class="form-control <?= ($validation->hasError('jumlah_tanggungan')) ? 'is-invalid' : ''; ?>" type="text" name="jumlah_tanggungan" placeholder="Jumlah Tanggungan" value="<?= old('jumlah_tanggungan'); ?>" id=" jumlah_tanggungan">
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input class="form-control au-input au-input--full" type="text" name="keterangan" placeholder="Masukkan kata sandi" id="ket" value="Belum Bayar">
                </div>
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Tambah Data</button>

            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>