<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-1">
  <div class="row">
    <div class="col">
      <h1 style="text-align: center;">Daftar Muzakki yang Sudah Bayar Zakat</h1>
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
            <th scope="col">Nama KK</th>
            <th scope="col">Jumlah Tanggungan</th>
            <th scope="col">Jenis Bayar</th>
            <th scope="col">Tanggungan yang Dibayar</th>
            <th scope="col">Jumlah Beras</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($bayar as $b) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $b['nama_KK']; ?></td>
              <td><?= $b['jumlah_tanggungan']; ?></td>
              <td><?= $b['jenis_bayar']; ?></td>
              <td><?= $b['jumlah_tanggunganyangdibayar']; ?></td>
              <td><?= $b['bayar_beras']; ?> Kg</td>
              <td>Rp<?php
                    $number = $b['bayar_uang'];
                    $formattedNumber = number_format($number, 0, '.', ',');
                    echo $formattedNumber; ?></td>
              <td style="width: 140px;"><a href="/bayar/edit/<?= $b['id']; ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                <form action="/bayar/<?= $b['id']; ?>/<?= $b['nama_KK']; ?>" method="post" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?');"><i class="fa-solid fa-trash"></i></button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
          <tr class="table">
            <td colspan="5" class="text-right"><strong>Total:</strong></td>
            <td><strong><?= $totalBeras; ?>Kg</strong></td>
            <td><strong>Rp<?php
                          $number = $totalUang;
                          $formattedNumber = number_format($number, 2, '.', ',');
                          echo $formattedNumber; ?></strong></td>
          </tr>
        </tbody>
      </table>
      <?= $pager->links('warga', 'warga_pagination'); ?>
      <a href="/bayar" class="btn btn-secondary">Kembali</a>
    </div>
  </div>
</div>

<?= $this->endSection(''); ?>