<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background-color: #6d41a1;">
  <h5 class="my-0 mr-md-auto font-weight-normal text-light">ShopShip Shop</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-light" href="<?= base_url('pweb/tambah') ?>">Tambah Data Penjualan</a>
  </nav>
  <a class="btn btn-outline-light" href="<?= base_url('pweb/logout') ?>">Sign Out</a>
</div>

<div class="pricing-header px-3 py-1 pt-md-3 pb-md-4 mx-auto text-center">
  <h1 class="display-4 pt-0">Laporan Penjualan Harian</h1>
  <?php if ($this->session->flashdata('pesan') == 'Ditambah') : ?>
    <div class="alert alert-success" role="alert">
      Data Berhasil Ditambah!
    </div>
  <?php elseif ($this->session->flashdata('pesan') == 'Diubah') : ?>
    <div class="alert alert-success" role="alert">
      Data Berhasil Diubah!
    </div>
  <?php elseif ($this->session->flashdata('pesan') == 'Dihapus') : ?>
    <div class="alert alert-success" role="alert">
      Data Berhasil Dihapus!
    </div>
  <?php endif ?>
</div>

<div class="container">
  <table class="table table-hover mb-5">
    <thead class="thead-light align-middle">
      <tr>
        <th rowspan="2" class="align-middle text-center">No.</th>
        <th rowspan="2" class="align-middle text-center">Nama Barang</th>
        <th rowspan="2" class="align-middle text-center">Harga</th>
        <th rowspan="2" class="align-middle text-center">Kuantitas</th>
        <th rowspan="2" class="align-middle text-center">Total Harga</th>
        <th rowspan="2" class="align-middle text-center">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($nilai as $data) : ?>
        <th class="align-middle text-center"><?= $no++ ?></th>
        <td class="align-middle"><?= $data['nama_barang'] ?></td>
        <td class="align-middle text-center"><?= $data['harga'] ?></td>
        <td class="align-middle text-center"><?= $data['kuantitas'] ?></td>
        <td class="align-middle text-center"><?= $data['total'] ?></td>
        <td class="align-middle text-center">
          <a href="<?= base_url('pweb/edit/' . $data['id']) ?>" class="align-middle btn btn-success">Edit</a>
          <a href="<?= base_url('pweb/delete/' . $data['id']) ?>" class="align-middle btn btn-danger" onclick="return confirm('Data ini akan dihapus. Anda yakin ?')">
            Hapus
          </a>
        </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>