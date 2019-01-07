<body style="background-color: #eaf8fb">
	<div>&nbsp;</div>
	<div style="padding: 50px;">
	<div class="jumbotron" style="height: 700px;">
	 	<h1 class="display-4">Masukan Data Siswa!</h1>
	  	<p class="lead">Isi Form Yang tersedia Untuk Meng Input Data Siswa!</p>
	  	<hr class="my-4">
	  	<form action="<?php echo site_url('input_siswa/tambah_aksi'); ?>" method="post">
	  		<label><b>Masukan NIS Siswa! :</b></label>
	  		<input class="form-control" type="text" name="nis_siswa" placeholder="Nomor Induk Siswa (NIS)">
	  		<div>&nbsp;</div>

	  		<label><b>Masukan Nama Siswa! :</b></label>
	  		<input class="form-control" type="text" name="nama" placeholder="Nama Siswa">
	  		<div>&nbsp;</div>

	  		<label><b>Masukan Kelas Siswa! :</b></label>
	  		<input class="form-control" type="text" name="kelas" placeholder="Kelas Siswa">
	  		<div>&nbsp;</div>

	  		<label><b>Masukan Jurusan Siswa! :</b></label>
	  		<input class="form-control" type="text" name="jurusan" placeholder="Jurusan Siswa">
	  		<div>&nbsp;</div>

	  		<input type="submit" value="Submit" type="raw" class="btn btn-primary btn-lg" role="button">
	  	</form>
	</div>
	</div>

</body>