<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm" style="background-color: #6d41a1;">
	<h5 class="my-0 mr-md-auto font-weight-normal text-light">ShopShip Shop</h5>
	<nav class="my-2 my-md-0 mr-md-3">
		<a class="p-2 text-light" href="<?= base_url('pweb') ?>">Kembali</a>
	</nav>
	<a class="btn btn-outline-light" href="<?= base_url('pweb/logout') ?>">Sign Out</a>
</div>

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">
				<div class="card-header text-center">Tambah Data</div>
				<div class="card-body">
					<form action="" method="post" class="needs-validation" novalidate>
						<div class="form-group">
							<label for="nama_brg">Nama Barang</label>
							<input type="text" class="form-control" name="nama_brg" id="nama_brg" placeholder="Masukan nama barang" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukan nama barang.
							</div>
						</div>
						<div class="form-group">
							<label for="harga">Harga Barang</label>
							<input type="harga" class="form-control" name="harga" id="harga" placeholder="Masukan harga barang" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukkan harga
							</div>
						</div>
						<div class="form-group">
							<label for="kuantitas">Kuantitas</label>
							<input type="kuantitas" class="form-control" name="kuantitas" id="kuantitas" placeholder="Masukan jumlah barang" autocomplete="off" required>
							<div class="invalid-feedback">
								Anda belum memasukkan jumlah barang
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="tambah">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>