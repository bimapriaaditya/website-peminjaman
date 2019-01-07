<body style="background-color: #eaf8fb">
	<div>&nbsp;</div>
	<div style="padding: 50px;">
	<div class="jumbotron" style="height: 700px;">
	 	<h1 class="display-4">Masukan Stok Barang Baru!</h1>
	  	<p class="lead">Isi Form Yang tersedia Untuk meng Input Barang Baru yang Ada!</p>
	  	<hr class="my-4">
	  	<form action="<?php echo site_url('input_barang/tambah_aksi'); ?>" method="post">
	  		<label><b>Masukan Kode Barang! :</b></label>
	  		<input class="form-control" name="kode_barang" type="text" placeholder="Kode Barang">
	  		<div>&nbsp;</div>

	  		<label><b>Masukan Nama Barang! :</b></label>
	  		<input class="form-control" name="nama_barang" type="text" placeholder="Nama Barang">
	  		<div>&nbsp;</div>

	  		<label><b>Jumlah Barang! :</b></label>
	  		<input class="form-control" name="jumlah_barang" type="text" placeholder="Total Barang">
	  		<div>&nbsp;</div>

	  		<input type="submit" value="Submit" type="raw" class="btn btn-primary btn-lg"  role="button">
	  	</form>
	</div>
	</div>

</body>