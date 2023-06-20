<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Ubah Data Distribusi Muzakki</h2>
            <form action="/mwarga/update/<?= $mwarga['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $mwarga['id']; ?>">
                <div class="form-group mb-2">
                    <label for="nama">Nama </label>
                    <select class="form-select" id="nama_KK" name="nama" aria-label="Default select example">
                        <option value="<?= $mwarga['nama']; ?>" selected><?= $mwarga['nama'], " | Kategori : ", $mwarga['kategori']; ?></option>
                        <?php foreach ($nama as $n) : ?>
                            <option value="<?= $n['nama']; ?>"><?= $n['nama'], " | Kategori : ", $n['kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="kategori">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option value="<?= $mwarga['kategori']; ?>" selected><?= $mwarga['kategori']; ?></option>
                        <?= $mwarga['kategori'] == 'Fakir' ?  '<option value="Miskin">Miskin</option> <option value="Mampu">Mampu</option>' : ($mwarga['kategori'] == 'Miskin' ? '<option value="Fakir">Fakir</option> <option value="Mampu">Mampu</option>' : '<option value="Fakir">Fakir</option> <option value="Miskin">Miskin</option>') ?>
                    </select>
                </div>
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Ubah Data</button>
                <a href="/mwarga"><button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>