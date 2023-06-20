<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 15 px;
        }

        table,
        th,
        td {
            padding: 2px;
            border: 2px solid black;
            border-collapse: collapse;
        }

        th {
            background-color: rgba(0, 50, 58, 0.2);
        }

        @page {
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 68px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <center>
        <div class="container">
            <div class="col">
                <div class="row">

                    <h4 style="width: 980px;">
                        LAPORAN KEGIATAN PENGUMPULAN DAN PENDISTRIBUSIAN ZAKAT FITRAH 1444 H/ 2023 M <br>
                        DI HIFDHUL MURSALIN JALAN 3 PAMIJAHAN KEL SUKARINDIK KEC BUNGUSARI KOTA TASIKMALAYA HARI JUMAT, 21 APRIL 2023</h4>
                    <table border="2" style="margin:5px; margin-top:20px;">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" colspan="8" class="text-center display-6">Laporan Distribusi Zakat</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            <tr>
                                <th>No</th>
                                <th>Uraian</th>
                                <th>Muzakki/Mustahik</th>
                                <th rowspan="2">Satuan(Rp/Kg)</th>
                                <th rowspan="2">Uang(Rp)</th>
                                <th rowspan="2">Beras(Kg)</th>
                                <th rowspan="2">Keterangan</th>
                                <th rowspan="2">Konversi Dalam Rupiah</th>
                            </tr>
                            <tr>
                                <th>A</th>
                                <th>Penerimaan Zakat</th>
                                <th>Muzakki</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Penerimaan Zakat Uang</td>
                                <td><?= $zakatUang; ?></td>
                                <td>Rp12.500 x 2.5 Kg</td>
                                <td><?php $number = $totalUang;
                                    $formattedNumber = number_format($number, 2, '.', ',');
                                    echo $formattedNumber;  ?></td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $totalUang;
                                    $formattedNumber = number_format($number, 2, '.', ',');
                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Penerimaan Zakat Beras</td>
                                <td><?= $zakatBeras; ?></td>
                                <td>2.5 Kg</td>
                                <td>-</td>
                                <td><?= $totalBeras; ?></td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $totalBeras * 12500;
                                    $formattedNumber = number_format($number, 2, '.', ',');
                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <th colspan="2">Total Penerimaan</th>
                                <th><?= $zakatBeras + $zakatUang; ?></th>
                                <th></th>
                                <th><?php $number = $totalUang;
                                    $formattedNumber = number_format($number, 2, '.', ',');
                                    echo $formattedNumber;  ?></th>
                                <th><?= $totalBeras; ?></th>
                                <th></th>
                                <th style="text-align: right;">Rp<?php $number = $totalUang + ($totalBeras * 12500);
                                    $formattedNumber = number_format($number, 2, '.', ',');
                                    echo $formattedNumber;  ?></th>
                            </tr>
                            <tr>
                                <td><br></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="text-center">
                                <th style="width:25px;">B</th>
                                <th>Pengeluaran</th>
                                <th>Mustahik</th>
                                <th>Satuan (Kg)</th>
                                <th>Jumlah (Kg)</th>
                                <th>Jumlah (Rp)</th>
                                <th>Keterangan</th>
                                <th style="width: 150px;">Konversi Dalam Rupiah</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td scope="row" style="text-align: left;">Fakir</td>
                                <td><?= $mfakir; ?></td>
                                <td><?= $sfakir; ?> Kg</td>
                                <td><?= $jfakir; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jfakir * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td scope="row" style="text-align: left;">Miskin</td>
                                <td><?= $mmiskin; ?></td>
                                <td><?= $smiskin; ?> Kg</td>
                                <td><?= $jmiskin; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jmiskin * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td scope="row" style="text-align: left;">Mampu</td>
                                <td><?= $mmampu; ?></td>
                                <td><?= $smampu; ?> Kg</td>
                                <td><?= $jmampu; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jmampu * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td scope="row" style="text-align: left;">Amilin</td>
                                <td><?= $mamilin; ?></td>
                                <td><?= $samilin; ?> Kg</td>
                                <td><?= $jamilin; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jamilin * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td scope="row" style="text-align: left;">Mualaf</td>
                                <td><?= $mmualaf; ?></td>
                                <td><?= $smualaf; ?> Kg</td>
                                <td><?= $jmualaf; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jmualaf * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td scope="row" style="text-align: left;">Ibnu Sabil</td>
                                <td><?= $mibnusabil; ?></td>
                                <td><?= $sibnusabil; ?> Kg</td>
                                <td><?= $jibnusabil; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jibnusabil * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td scope="row" style="text-align: left;">Fisabilillah</td>
                                <td><?= $mfisabilillah; ?></td>
                                <td><?= $sfisabilillah; ?> Kg</td>
                                <td><?= $jfisabilillah; ?> Kg</td>
                                <td>-</td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = $jfisabilillah * 12500;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td scope="row" style="text-align: left;">Amplop 2 Kotak</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Rp<?php $number = 20000;
                                        $formattedNumber = number_format($number, 2, '.', ',');
                                        echo $formattedNumber;  ?></td>
                                </td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = 20000;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td scope="row" style="text-align: left;">Plastik + Cutter</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Rp<?php $number = 30000;
                                        $formattedNumber = number_format($number, 2, '.', ',');
                                        echo $formattedNumber;  ?></td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = 30000;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td scope="row" style="text-align: left;">Transport Amil dan Biaya Distribusi</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Rp<?php $number = 150000;
                                        $formattedNumber = number_format($number, 2, '.', ',');
                                        echo $formattedNumber;  ?></td>
                                <td>-</td>
                                <td style="text-align: right;">Rp<?php $number = 150000;
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></td>
                            </tr>
                            <tr>
                                <th colspan="2">Total Pengeluaran</th>
                                <th><?= $mfakir + $mmiskin + $mmampu + $mamilin + $mmualaf + $mfisabilillah + $mibnusabil; ?></th>
                                <th><?= $sfakir + $smiskin + $smampu + $samilin + $smualaf + $sfisabilillah + $sibnusabil; ?></th>
                                <th><?= $jfakir + $jmiskin + $jmampu + $jamilin + $jmualaf + $jfisabilillah + $jibnusabil; ?></th>
                                <th>Rp<?php $number = 200000;
                                        $formattedNumber = number_format($number, 2, '.', ',');
                                        echo $formattedNumber;  ?></th>
                                <th>-</th>
                                <th style="text-align: right;">Rp<?php $number = 200000 + (12500 * $jfakir) + (12500 * $jmiskin) + (12500 * $jmampu) + (12500 * $jamilin) + (12500 * $jmualaf) + (12500 * $jfisabilillah) + (12500 * $jibnusabil);
                                                                    $formattedNumber = number_format($number, 2, '.', ',');
                                                                    echo $formattedNumber;  ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>

</body>

</html>