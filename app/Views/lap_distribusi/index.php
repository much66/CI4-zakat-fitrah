<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="row">
            <table class="table table-bordered" border="3" style="margin:5px; margin-top:20px;">
                <thead class="table-dark">
                    <tr>
                        <th scope="col" colspan="6" class="text-center display-6">Laporan Distribusi Zakat</th>
                    </tr>
                    <tr class="text-center">
                        <th>Pengeluaran</th>
                        <th>Mustahik</th>
                        <th>Satuan (Kg)</th>
                        <th>Jumlah (Kg)</th>
                        <th>Jumlah (Rp)</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row" style="text-align: left;">Fakir</th>
                        <td><?= $mfakir; ?></td>
                        <td><?= $sfakir; ?> Kg</td>
                        <td><?= $jfakir; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Miskin</th>
                        <td><?= $mmiskin; ?></td>
                        <td><?= $smiskin; ?> Kg</td>
                        <td><?= $jmiskin; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Mampu</th>
                        <td><?= $mmampu; ?></td>
                        <td><?= $smampu; ?> Kg</td>
                        <td><?= $jmampu; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Amilin</th>
                        <td><?= $mamilin; ?></td>
                        <td><?= $samilin; ?> Kg</td>
                        <td><?= $jamilin; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Mualaf</th>
                        <td><?= $mmualaf; ?></td>
                        <td><?= $smualaf; ?> Kg</td>
                        <td><?= $jmualaf; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Ibnu Sabil</th>
                        <td><?= $mibnusabil; ?></td>
                        <td><?= $sibnusabil; ?> Kg</td>
                        <td><?= $jibnusabil; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Fisabilillah</th>
                        <td><?= $mfisabilillah; ?></td>
                        <td><?= $sfisabilillah; ?> Kg</td>
                        <td><?= $jfisabilillah; ?> Kg</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Amplop 2 Kotak</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp20.000,00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Plastik + Cutter</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp30.000,00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <th scope="row" style="text-align: left;">Transport Amil dan Biaya Distribusi</th>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Rp150.000,00</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <center><button class="btn btn-secondary mt-2" type="button" value="Print Laporan" onclick="window.open('<?php echo site_url('distribusi/printpdf') ?>')"><i class="fa-solid fa-file-pdf"></i> Print Laporan</button></center>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>