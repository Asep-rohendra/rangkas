<div class="col-md-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<p><i class="glyphicon glyphicon-user"></i> Status Member</p>
		</div>
		<div class="panel-body"> 
		<table class="table table-striped">
			<tr><td>Jumlah Member</td><td>: <?php echo count($member->result());?></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
		</table>
		</div>
		<div class="panel-footer">
			<div class="text-right">
				<a class="btn btn-primary" id="member" href=""> Lihat <i class="glyphicon glyphicon-forward"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<p><i class="glyphicon glyphicon-user"></i> Status Barang</p>
		</div>
		<div class="panel-body"> 
		<table class="table table-striped">
			<tr><td>Jumlah Barang</td><td>: <?php echo count($barang->result());?></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
		</table>
		</div>
		<div class="panel-footer">
			<div class="text-right">
				<a class="btn btn-primary" id="barang" href=""> Lihat <i class="glyphicon glyphicon-forward"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<p><i class="glyphicon glyphicon-user"></i> Status Sponsor</p>
		</div>
		<div class="panel-body"> 
		<table class="table table-striped">
			<tr><td>Status Sponsor</td><td><?php echo count($sponsor->result());?></td></tr>
			<tr><td></td><td></td></tr>
			<tr><td></td><td></td></tr>
		</table>
		</div>
		<div class="panel-footer">
			<div class="text-right">
				<a class="btn btn-primary" id="sponsor" href=""> Lihat<i class="glyphicon glyphicon-forward"></i>></a>
			</div>
		</div>
	</div>
</div>
