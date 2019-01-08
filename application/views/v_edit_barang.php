<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>style/style.css">

	<div class="container">
		<div class="row">
			<div class="col-sm-2">
				<div>&nbsp;</div>
				<img width="150px" src="<?php echo base_url();?>img/bootstrap-png-bootstrap-512.png">
				<div>&nbsp;</div>
			</div>
			<div class="col-sm-9">
				<div>&nbsp;</div>

				<h1>Selamat Datang Di Website Admin </h1>
				<h3>Ini adalah Website Admin SMK Negeri 2 Bandung</h3>
			</div>
		</div>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 20px;">
				<img width="50px" src="<?php echo base_url();?>img/logo.png"> <div>&nbsp;</div><div>&nbsp;</div>
				<a class="navbar-brand" href="<?php echo base_url();?>index.php">Home</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="<?php echo base_url();?>index.php/admin">Admin <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url();?>index.php/siswa">Siswa</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url();?>index.php/belajar">Cek Stok</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Input
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="<?php echo base_url();?>index.php/input_barang">Input Stok</a>
			          <a class="dropdown-item" href="<?php echo base_url();?>index.php/input_siswa">Input Data Siswa</a>
			          <div class="dropdown-divider"></div>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#">Hujat Web</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #eef9fb;">
			      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
			    </form>
			  </div>
			</nav>
	</div>
	<hr>
</head>
<body style="background-color: #eaf8fb">
	<div>&nbsp;</div>
	<div style="padding: 50px;">
	<div class="jumbotron" style="height: 700px;">
	 	<h1 class="display-4">Masukan Data Barang!</h1>
	  	<p class="lead">Isi Form Yang tersedia Untuk Meng Edit Data Yang Sudah Ada!</p>
	  	<hr class="my-4">
	  	<?php foreach ($barang as $b) { ?>
	  	}
	  	<form action="<?php echo site_url(). 'input_barang/update'; ?>" method="post">
	  		<label><b>Masukan Kode Barang! :</b></label>
	  		<input class="form-control" name="kode_barang" type="text" value="<?php echo $b->kode_barang ?>">
	  		<div>&nbsp;</div>

	  		<label><b>Masukan Nama Barang! :</b></label>
	  		<input class="form-control" name="nama_barang" type="text" value="<?php echo $u->nama_barang ?>">
	  		<div>&nbsp;</div>

	  		<label><b>Jumlah Barang! :</b></label>
	  		<input class="form-control" name="jumlah_barang" type="text" value="<?php echo $u->jumlah_barang ?>">
	  		<div>&nbsp;</div>

	  		<input type="submit" value="Simpan" type="" class="btn btn-primary btn-lg">
	  	</form>
	  	<?php } ?>
	</div>
	</div>

</body>
<script src="<?php echo base_url();?>assets/jquery/jquery.min.js" ></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" ></script>
</html>