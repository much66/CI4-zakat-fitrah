<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <h1 style="text-align: center;">Daftar Muzakki</h1>
        <div class="col-3">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="keyword" placeholder="Recipient's username" aria-label="Masukkan keyword pencarian..." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" name="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                    <?php foreach ($warga as $w) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $w['nama']; ?></td>
                            <td><?= $w['alamat']; ?></td>
                            <td>
                                <a href="#" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $pager->links('warga', 'warga_pagination'); ?>
        </div>
    </div>
</div>

<?= $this->endSection(''); ?>