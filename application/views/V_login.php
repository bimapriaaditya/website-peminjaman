<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login.css">
<body style="background-color: #efefef;">

	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Baca Dulu !
	</button>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title" id="exampleModalLabel">Username & Password</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	          			<i class="fa fa-check-double"></i>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	        	<b>Username </b> : admin <br>
	        	<b>Password </b> : admin123
	        	<div>&nbsp;</div><hr>
	        	<b>Username </b> : bimapriaaditya <br>
	        	<b>Password </b> : bimapria4420
	        	<div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
	        	Sekian Dan Terimakasih <i class="fa fa-smile-wink"></i>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        		<button type="button" class="btn btn-primary">Save changes</button>
	      		</div>
	    	</div>
		</div>
	</div>

	<h1 style="font-family: cursive; padding-top: 8%;text-align: center;">Login Website SMKN 2 Bandung<br/> www.smkn2bdg.com</h1>
	<div>&nbsp;</div>
	<form action="<?php echo site_url('login/aksi_login'); ?>" method="post" style="font-family: cursive; padding-left: 0%">		

		<div style="padding-left: 33%;">
			<label><b>Username</b></label>
			<input class="form-control" type="text" placeholder="Username" name="username" style="width: 50%;">
		</div>

		<div>&nbsp;</div>

		<div class="form-group" style="padding-left: 33%;">
    		<label for="exampleInputPassword1"><b>Password</b></label>
    		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" style="width: 50%;">
  		</div>


  		<div style="padding-left: 34%;">
			<input type="submit" value="Login" class="btn btn-success">
		</div>

	</form>
</body>