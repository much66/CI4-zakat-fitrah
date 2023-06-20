<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-1">
    <div class="row">
        <div class="col">
            <hr style="color: dimgray;">
            <h1 style="text-align: center;">Distribusi Mustahik Warga</h1>
            <hr style="color: dimgray;">
            <div class="col-12">
                <form action="" method="post">
                    <div class="input-group mb-4">
                        <input type="text" class="form-control" style="width:300px;" name="keyword" placeholder="Masukkan Keyword Pencarian...." aria-label="Masukkan keyword pencarian..." aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary rounded" type="submit" name="submit" id="button-addon2">Cari</button>
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
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (6 * ($currentPage - 1)); ?>
                    <?php foreach ($mwarga as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td class="text-start"><?= $m['nama']; ?></td>
                            <td><?= $m['kategori']; ?></td>
                            <td>Belum menerima zakat</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('warga', 'warga_pagination'); ?>

            <a href="/mwarga" class="btn btn-secondary mt-2">Kembali</a>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>