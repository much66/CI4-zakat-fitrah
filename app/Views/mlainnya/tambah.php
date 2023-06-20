<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Tambah Mustahik Lainnya</h2>
            <form action="/mlainnya/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama">Nama Mustahik</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="kategori">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option selected hidden>- Pilih Kategori -</option>
                        <option value="Amilin">Amilin</option>
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Mualaf">Mualaf</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>
                    </select>
                    <!-- <input class="form-control <?= ($validation->hasError('kategori')) ? 'is-invalid' : ''; ?>" type="text" name="kategori" placeholder="Masukkan Kategori" value="<?= old('kategori'); ?>" id=" kategori"> -->
                </div>

                <!-- <div class="form-group">
                    <label for="hak">Hak</label>
                    <input class="form-control au-input au-input--full" type="text" name="hak" placeholder="Keterangan" id="hak">
                </div> -->
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Distribusikan</button>
                <a href="/mlainnya"><button class="au-btn au-btn--block btn btn-outline-danger m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>