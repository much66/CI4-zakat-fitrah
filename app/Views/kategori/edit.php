<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Ubah Data Muzakki</h2>
            <form action="/kategori/update/<?= $kategori['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $kategori['id']; ?>">
                <div class="form-group mb-2">
                    <label for="nama_kategori">Nama </label>
                    <label for="kategori">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="nama_kategori">
                        <option selected>- Pilih Kategori -</option>
                        <option value="Fakir">Fakir</option>
                        <option value="Miskin">Miskin</option>
                        <option value="Mampu">Mampu</option>
                        <option value="Amilin">Amilin</option>
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Mualaf">Mualaf</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="jumlah_hak_beras">Jumlah Hak Beras</label>
                    <div class="input-group">
                        <input class="form-control <?= ($validation->hasError('jumlah_hak_beras')) ? 'is-invalid' : ''; ?>" type="percent" name="jumlah_hak_beras" placeholder="Masukkan Persentase Hak Beras" value="<?= old('jumlah_hak_beras'); ?>" id=" jumlah_hak_beras">
                        <span class="input-group-text">%</span>
                    </div>
                </div>
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Ubah Data</button>
                <a href="/kategori"><button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>