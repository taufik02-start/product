		<div class="row mt-3 justify-content-center">
			<div class="col-md-6 mb-3">
				<div class="card" style="width: 100%;">
					<div class="card-body">
						<h5 class="card-title">Tambah Data Produk</h5>
						<form action="<?= base_url('product/insert') ?>" method="POST">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="nama">Nama Produk</label>
										<input type="text" name="nama" id="nama" value="<?= set_value('nama') ?>" class="form-control">
										<?= form_error('nama', '<small class="text-danger pl-3" id="error-nama">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="harga">Harga</label>
										<input type="number" name="harga" id="harga" class="form-control" value="<?= set_value('harga') ?>">
										<?= form_error('harga', '<small class="text-danger pl-3" id="error-harga">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="stok">Stok</label>
										<input type="text" name="stok" id="stok" class="form-control" value="<?= set_value('stok') ?>">
										<?= form_error('stok', '<small class="text-danger pl-3" id="error-stok">', '</small>'); ?>
									</div>
									<div class="form-group">
										<label for="keterangan">Keterangan</label>
										<textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="4" style="resize: none;"><?= set_value('keterangan') ?></textarea>
										<?= form_error('keterangan', '<small class="text-danger pl-3" id="error-keterangan">', '</small>'); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-lg-6 col-6">
									<button type="submit" class="card-link btn btn-outline-success btn-block">Simpan</button>
								</div>
								<div class="col-md-6 col-sm-6 col-lg-6 col-6">
									<button type="reset" class="card-link btn btn-outline-danger btn-block">Batal</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>


		</body>

		</html>