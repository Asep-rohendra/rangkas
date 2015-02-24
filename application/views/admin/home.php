<!DOCTYPE html>
<html>
<head>
	<title>
		Admin Rangkas
	</title>
	<script type="text/javascript">
	$(document).ready(function () {
		//deff
		$("#isi").load('<?php echo site_url('adminRangkas/admin') ;?>')
		break;
			
	});
	</script>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("a#member").click(function() 
			{
				$("#isi").load('<?php echo site_url('adminRangkas/kelolaMember') ;?>')
				return false;
			});
			$("a#barang").click(function() 
			{
				$("#isi").load('<?php echo site_url('adminRangkas/kelolaBarang') ;?>')
				return false;
			});	
			$("a#sponsor").click(function() 
			{
				$("#isi").load('<?php echo site_url('adminRangkas/kelolaSponsor') ;?>')
				return false;
			});
			$("a#mail").click(function() 
			{
				$("#isi").load('<?php echo site_url('adminRangkas/sendMail') ;?>')
				return false;
			});
	});


	</script>
</head>
<body>
<div class="container-fluid">
	<div class="row clearfix"> 
			<div class="col-md-12">
			<?php include 'navbar.php';?>
			<br>	
			<br>	
			<br>	
			</div>
			<div class="col-md-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
					<h4>Selamat Datang</h4>
					</div>
					<div class="panel-body">
						<ul class="nav panel-body">
							<li>
								<a id="member" href=""><i class="glyphicon glyphicon-user"></i> Kelola Member </a>
							</li>
							<li>
								<a id="barang" href=""><i class="glyphicon glyphicon-pencil"></i> Tinjau Barang </a>
							</li>
							<li>
								<a id="sponsor" href=""><i class="glyphicon glyphicon-briefcase"></i> Kelola Sponsor </a>
							</li>
							<li>
								<a id="mail" href=""><i class="glyphicon glyphicon-envelope"></i> Send Mail </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="isi" class="col-md-9">
				<?php include 'status.php';?>
			</div>
	</div>
</div>
</body>
</html>