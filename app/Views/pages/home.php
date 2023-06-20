<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<h1><i class="fa-solid fa-gauge me-2 pt-4"></i>Dashboard</h1>
<hr style="color: dimgrey;" class="pb-4">
<div class="row">
    <div class="card bg-info mx-4 ms-5" style="width: 18rem;">
        <div class="card-body text-white">
            <div class="card-body-icon">
                <i class="fa-solid fa-hand-holding-dollar me-3"></i>
            </div>
            <h5 class="card-title">Jumlah Muzakki</h5>
            <div class="display-4"><?= $tmuzakki; ?></div>
            <a href="/zakat" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                <p class="card-text">Lihat Detail <i class="fa-solid fa-angles-right ms-2"></i></p>
            </a>
        </div>
    </div>
    <div class="card bg-secondary mx-4" style="width: 18rem;">
        <div class="card-body text-white">
            <div class="card-body-icon">
                <i class="fa-solid fa-layer-group me-3"></i>
            </div>
            <h5 class="card-title">Jumlah Kategori</h5>
            <div class="display-4"><?= $tkategori; ?></div>
            <a href="/kategori" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                <p class="card-text">Lihat Detail <i class="fa-solid fa-angles-right ms-2"></i></p>
            </a>
        </div>
    </div>
    <div class="card bg-success mx-4" style="width: 18rem;">
        <div class="card-body text-white">
            <div class="card-body-icon">
                <i class="fa-solid fa-hands-holding me-3"></i>
            </div>
            <h5 class="card-title">Jumlah Mustahik</h5>
            <div class="display-4"><?= $tmwarga + $tmlainnya; ?></div>
            <a href="/mwarga" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                <p class="card-text">Lihat Detail <i class="fa-solid fa-angles-right ms-2"></i></p>
            </a>
        </div>
    </div>
</div>
<br><br>
<div class="row">
    <div class="card bg-danger mx-4 ms-5" style="width: 18rem;">
        <div class="card-body text-white">
            <div class="card-body-icon">
                <i class="fa-solid fa-bowl-rice me-3"></i>
            </div>
            <h5 class="card-title">Total Zakat Beras</h5>
            <div class="display-4"><?= $totalBeras; ?> Kg</div>
            <a href="/bayar/data" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                <p class="card-text">Lihat Detail <i class="fa-solid fa-angles-right ms-2"></i></p>
            </a>
        </div>
    </div>
    <div class="card bg-warning mx-4" style="width: 18rem;">
        <div class="card-body text-white">
            <div class="card-body-icon">
                <i class="fa-solid fa-coins me-3"></i>
            </div>
            <h5 class="card-title">Total Zakat Uang</h5>
            <div class="my-3" style="font-size:35px; font-weight:bold;">Rp <?php $number = $totalUang;
                                                                            $formattedNumber = number_format($number, 0, '.', ',');
                                                                            echo $formattedNumber; ?></div>
            <a href="/bayar/data" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                <p class="card-text">Lihat Detail <i class="fa-solid fa-angles-right ms-2"></i></p>
            </a>
        </div>
    </div>
    <div class="card bg-dark mx-4" style="width: 18rem;">
        <div class="card-body text-white">
            <div class="card-body-icon">
                <i class="fa-solid fa-hands-holding-child me-3"></i>
            </div>
            <h5 class="card-title">Total Zakat Terdistribusi</h5>
            <div class="display-5"><?= $total_sudah; ?>/<?= $tmwarga + $tmlainnya; ?></div>
            <p class="card-text">
                <a href="/mwarga" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Warga</a> dan
                <a href="/mlainnya" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">lainnya</a><i class="fa-solid fa-angles-right ms-2"></i>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>