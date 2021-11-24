<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<style>
		.form-control-borderless {
			border: none;
		}

		.form-control-borderless:hover,
		.form-control-borderless:active,
		.form-control-borderless:focus {
			border: none;
			outline: none;
			box-shadow: none;
		}
	</style>
</head>

<body>
	<div class="container">
		<br />
		<div class="row justify-content-center">
			<div class="col-12 col-md-12 col-lg-12">
				<form class="card card-sm" action="<?=base_url('')?>" method="get">
					<div class="card-body row no-gutters align-items-center">
						<div class="col-auto">
							<i class="fas fa-search h4 text-body"></i>
						</div>
						<!--end of col-->
						<div class="col">
							<input name="q" value="<?=$this->input->get('q')?>" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Masukan Nama Barang ....">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-default" type="submit">Cari</button>
						</div>
						<!--end of col-->
					</div>
				</form>
			</div>
			<!--end of col-->
		</div> 