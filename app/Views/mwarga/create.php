<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 style="text-align:center;" class="my-2">Distribusi Zakat</h2>
            <hr style="color:grey;">
            <form action="/mwarga/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama">Nama </label>
                    <select class="form-select mt-2" id="nama_KK" name="nama" aria-label="Default select example">
                        <option selected hidden>-- Pilih Nama Penerima --</option>
                        <?php foreach ($nama as $n) : ?>
                            <option value="<?= $n['nama']; ?>"><?= $n['nama'], " | Kategori : ", $n['kategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="kategori">Kategori</label>
                    <select class="form-select" aria-label="Default select example" name="kategori">
                        <option selected hidden>- Pilih Kategori -</option>
                        <option value="Fakir">Fakir</option>
                        <option value="Miskin">Miskin</option>
                        <option value="Mampu">Mampu</option>
                    </select>
                </div>
                <!-- 
                <div class="form-group">
                    <label for="hak">Hak</label>
                    <input class="form-control au-input au-input--full" type="text" name="hak" placeholder="Keterangan" id="hak">
                </div> -->
                <br>
                <button class="au-btn au-btn--block btn btn-outline-success m-b-20" type="submit">Distribusikan</button>
                <a href="/mwarga"><button class="au-btn au-btn--block btn btn-outline-danger m-b-20" type="button">Batal</button></a>
            </form>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>