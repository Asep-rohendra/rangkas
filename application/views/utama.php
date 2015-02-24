<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php' ;?>
<title><?php echo $title; ;?></title>
<?php include 'ajax.php';?>

</head>
<body class="body" >
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php include 'navbar.php';?>
		
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
		<h1 class="text-center">
			<font color="red">Pasar </font><font color="black">Rangkas</font>
		</h1>
			<hr> </hr>
		</div>
		<div class="col-md-4 column">
			
		</div>

</div>
<div class="container">
	<div id="pencarian" class="col-md-12">
		<div class="col-md-8">
			<form class="form-group">
				<input type="text" name="cari" Placeholder="Cari Sesuatu..." class="form-control" >
			</form>
		</div>
		<div class="col-md-2">
			<form class="form-group">
				<select class="form-control">
					<option value="">Pilih Jenis</option>
					
				</select>
			</form>
		</div>
		<div class="col-md-2">
			<select class="form-control">
				<option value="">Urutkan</option>
			</select>
		</div>
	</div>
	<div id="konten" class="col-md-12">
      
	
	</div>	
</div>
<footer class="footer nav navbar-fixed-bottom">
      <div class="container">
        <div class="col-konten">
         <p class="text-right text-muted">Copyright :Rangkas-2015</p>  
        </div>
       
      </div>
    </footer>
</body>
</html>
