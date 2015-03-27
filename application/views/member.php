<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
</head>
<body>
<div class="container-fluid">
	
	<div class="col-md-12">
		<h1>Pasar Rangkas</h1>
	</div>
	<div class="col-md-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				Adnda Masuk Sebagai : <?php echo($email);?>
			</div>
			<div class="panel-body">
				<ul class="nav">
					<li>
						<a href=""><i class="glyphicon glyphicon-home"></i> Home</a>	
					</li>
					<li>
						<a href=""><i class="glyphicon glyphicon-user"></i> Barang Anda</a>
					</li>
					<li>
						<a href=""><i class="glyphicon glyphicon-pencil"></i> Penawaran</a>
					</li>
					<li class="panel-footer">
						<a href="<?php echo site_url('utama/logout');?>"><i class="glyphicon glyphicon-off"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>>