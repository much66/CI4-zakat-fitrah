<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="row">
            <table class="table" border="3" style="margin:5px; margin-top:50px;">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" colspan="3" class="text-center display-6">Laporan Pengumpulan Zakat</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Total Muzakki</th>
                        <td>:</td>
                        <td><?= $total_muzakki; ?> Kepala Keluarga</td>
                    </tr>
                    <tr>
                        <th scope="row">Total Jiwa</th>
                        <td>:</td>
                        <td><?= $total_jiwa; ?> Warga</td>
                    </tr>
                    <tr>
                        <th scope="row">Total Zakat Beras</th>
                        <td>:</td>
                        <td><?= $total_beras; ?> Kg</td>
                    </tr>
                    <tr>
                        <th scope="row">Total Zakat Uang</th>
                        <td>:</td>
                        <td>Rp<?php $number = $total_uang;
                                $formattedNumber = number_format($number, 2, '.', ',');
                                echo $formattedNumber; ?></td>
                    </tr>
                </tbody>
            </table>
            <center><button class="btn btn-secondary mt-2" type="button" value="Print Laporan" onclick="window.open('<?php echo site_url('distribusi/printpdf', '') ?>')"><i class="fa-solid fa-file-pdf"></i> Print Laporan</button></center>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>