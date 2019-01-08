<body style="background-color: #eaf8fb">
	<h1><center>Stok Barang SMK Negei 2 Bandung</center></h1>
	<div>&nbsp;</div>
	<center>
		<table border="0" style="padding-top:100px;">
			<tr>
				<th style="padding:30px; text-align: left;">No</th>
				<th style="padding:30px; text-align: left;">Kode Barang</th>
				<th style="padding:30px; text-align: left;">Nama Barang</th>
				<th style="padding:30px; text-align: left;">Jumlah Barang</th>
				<th style="padding:30px; text-align: center;">Action</th>
			</tr>
			<?php $no=1; foreach($barang as $u){ ?>
			<tr>
				<td style="text-align: center; padding-bottom: 30px;"><?php echo $no++ ?></td>
				<td style="text-align: center; padding-bottom: 30px;"><?php echo $u->kode_barang ?></td>
				<td style="text-align: center; padding-bottom: 30px;"><?php echo $u->nama_barang ?></td>
				<td style="text-align: center; padding-bottom: 30px;"><?php echo $u->jumlah_barang ?></td>
				<td>
					<?php echo anchor('input_barang/edit/'.$u->id,'<button type="button" class="btn btn-primary"><i class="fa fa-edit" > Edit</i> <i class="fa fa-edit"></i></button>'); ?>
                    <?php echo anchor('input_barang/hapus/'.$u->id,'<button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus <i class="fa fa-trash"> </i></button>'); ?>
				</td>
			</tr>
			<?php } ?>
		</table>
		<div>&nbsp;</div>
		<!-- <button type="button" class="btn btn-warning"><i class="fa fa-plus"></i>&nbsp Input Stok &nbsp<i class="fa fa-plus"></i></button> -->
		<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
			<i class="fa fa-plus"></i>&nbsp Input Stok &nbsp<i class="fa fa-plus"></i>
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  	<div class="modal-dialog" role="document">
		    	<div class="modal-content">
		      		<div class="modal-header">
		        		<h5 class="modal-title" id="exampleModalLabel">Maaf Fungsi CRUD Belum tersedia</h5>
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          			<span aria-hidden="true">&times;</span>
		          			<i class="fa fa-check-double"></i>
		        		</button>
		      		</div>
		      		<div class="modal-body">
		        		Mohon Maaf Atas Ketidak Nyamanan Saat Menilai Aplikasi Ini
		        		Mungkin Suatu saat nanti Website ini dapat diakses dengan sanggat lancar 
		        		<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div> <i>Sekian Dan Terima Kasih</i>
		      		</div>
		      		<div class="modal-footer">
		        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        		<a href="<?php echo base_url();?>index.php/input_barang"><button type="submit" class="btn btn-primary">Input Data</button></a>
		      		</div>
		    	</div>
			</div>
		</div>
		<div>&nbsp;</div>
	</center>
</body>
</html>