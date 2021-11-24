<div class="row">
	<div class="col-md-12">
		<a href="<?=base_url('product/insert')?>" class="btn btn-success mt-2 float-right"> <i class="fa fa-plus"></i> Tambah Data Produk</a>
	</div>
</div>
<div class="row mt-3">
	<?php foreach ($products as $product) { ?>
		<div class="col-12 col-sm-12 col-lg-4 col-md-6 mb-3">
			<div class="card" style="width: 100%;">
				<div class="card-body">
					<h5 class="card-title"><?=word_limiter($product['nama_produk'],4)?></h5>
					<div class="row">
						<div class="col-6 col-sm-6 col-lg-6 col-md-6">
							<h6 class="card-subtitle mb-2 text-success">Rp. <?=number_format($product['harga'],'0',',','.')?> </h6>
						</div>
						<div class="col-6 col-sm-6 col-lg-6 col-md-6">
							<h6 class="card-subtitle mb-2 text-danger text-right">Stok <?=$product['jumlah']?></h6>
						</div>
					</div>
					<p class="card-text" style="height: 96px;">
					<?=word_limiter($product['keterangan'],20)?>
					</p>
					<a href="<?=base_url('product/edit/'.$product['id'])?>" class="card-link btn btn-outline-success" style="width: 25%;">Edit</a>
					<a href="<?=base_url('product/delete/'.$product['id'])?>" class="card-link btn btn-outline-danger" style="width: 25%;">Hapus</a>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
</div>


</body>

</html>