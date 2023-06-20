<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Ubah Data Distribusi Muzakki</h2>
            <form action="/mlainnya/update/<?= $mlainnya['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $mlainnya['id']; ?>">
                <div class="form-group mb-2">
                    <label for="nama">Nama </label>
                    <select class="form-select" id="nama_KK" name="nama" aria-label="Default select example">
                        <option value="<?= $mlainnya['nama']; ?>" selected><?= $mlainnya['nama'], " | Kategori : ", $mlainnya['kategori']; ?></option>
                        <?php foreach ($nama as $n) : ?>
                            <option value="<?= $n['nama']; ?>"><?= $n['nama'], " | Kategori : ", $n['kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="kategori">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option value="<?= $mlainnya['kategori']; ?>" selected><?= $mlainnya['kategori']; ?></option>
                        <?= $mlainnya['kategori'] == 'Amilin' ? '
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Mualaf">Mualaf</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>' : ($mlainnya['kategori'] == 'Fisabilillah' ? '
                        <option value="Amilin">Amilin</option>
                        <option value="Mualaf">Mualaf</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>' : ($mlainnya['kategori'] == 'Mualaf' ? '
                        <option value="Amilin">Amilin</option>
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Ibnu Sabil">Ibnu Sabil</option>' : '
                        <option value="Amilin">Amilin</option>
                        <option value="Fisabilillah">Fisabilillah</option>
                        <option value="Mualaf">Mualaf</option>'
                        )) ?>
                    </select>
                </div>
                <!-- <div class="form-group mb-2">
                    <label for="kategori">Hak</label>
                    <input class="form-control" type="text" name="hak" placeholder="Masukkan Keterangan" id="ket" value=">
                </div> -->
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Ubah Data</button>
                <a href="/mlainnya"><button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>