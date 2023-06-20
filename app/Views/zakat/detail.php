<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="title">
                <h2 style="text-align: center;">Data Muzakki</h2>
            </div>
            <table border="0" width="350px" style="padding-top: 10px;">
                <tr>
                    <th scope="row"></th>
                    <td>Foto</td>
                    <td>:</td>
                    <td><img src="/img/<?= $zakat['foto']; ?>" alt="" style="max-width: 100px;"></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $zakat['nama_muzakki']; ?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Tanggungan</td>
                    <td>:</td>
                    <td><?= $zakat['jumlah_tanggungan']; ?></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td><?= $zakat['keterangan'] ?></td>
                </tr>
                <tr>
                    <td><a href="/zakat/edit/<?= $zakat['id']; ?>" class="btn btn-warning">edit</a></td>
                    <form action="/zakat/<?= $zakat['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');">Hapus</button>
                    </form>
                </tr>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>