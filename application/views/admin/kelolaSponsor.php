<script type="text/javascript">
	$(document).ready(function  () {

		$("#fedit").hide();
		$("#warning").hide();
			$('a#edit').click(function() 
			{
				$("#warning").hide();
				$("#tblsponsor").hide("fast");
				$("#fedit").show("fast");
				return false;

			});
			$('button#simpan').click(function() 
			{
				$("#warning").show("slow");
				$("#tblsponsor").show("fast");
				$("#fedit").hide("fast");
				return false;

			});
			$('a#x').click(function() 
			{
				$("#warning").hide("slow");
				return false;

			});
	});
</script>
<div class=" panel panel-primary">
<div class="panel-heading">
	Kelola Sponsor
</div>
<div class="alert alert-success" id="warning">
	<p class="text-center">
		Berhasil ! <a id="x" class="text-success" href=""> <i class="glyphicon glyphicon-remove"></i></a>
	</p>
</div>
<div id="tblsponsor" class="panel-body">
	<table class="table table-condensed table-hover table-bordered">
	<thead class="bg-primary"><th colspan="8">Tabel Sponsor</thead>
	<thead class="bg-success">
		<th>No</th>
		<th>Nama Sponsor</th>
		<th>Email </th>
		<th>Kontak</th>
		<th>Alamat</th>
		<th>Tanggal Sponsor</th>
		<th>Periode</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php $no=1; foreach ($sponsor->result() as $row): ?>
		<tr> 
			<td><?php echo $no++ ;?></td>
			<td><?php echo $row->sponsor_name;?></td>
			<td><?php echo $row->email;?></td>
			<td><?php echo $row->kontak;?></td>
			<td><?php echo $row->alamat;?></td>
			<td><?php echo dateindo($row->tanggalSponsor);?></td>
			<td><?php echo $row->periode;?></td>
			<td>
				<a id="edit" href="#" class="btn btn-xs btn-primary btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</a>
				<a href="#" class="btn btn-xs btn-primary btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Hapus</a>
			</td>
		</tr>
	<?php endforeach;?>
	</tbody>	
	</table>
</div>

<div id="fedit" class="panel-body">
<form class="form-grop">
<table class="table">
<table class="table table-condensed table-hover table-bordered">
	<thead class="bg-primary"><th colspan="8">Tabel Sponsor</thead>
	<thead class="bg-success">
		<th>No</th>
		<th>Nama Sponsor</th>
		<th>Email </th>
		<th>Kontak</th>
		<th>Alamat</th>
		<th>Tanggal Sponsor</th>
		<th>Periode</th>
		<th>Aksi</th>
	</thead>
	<td><input type="text" class="form-control" /></td>
	<td><input type="text" class="form-control" /></td>
	<td><input type="text" class="form-control" /></td>
	<td><input type="text" class="form-control" /></td>
	<td><input type="text" class="form-control" /></td>
	<td><input type="text" class="form-control" /></td>
	<td><input type="number" class="form-control" /></td>
	<td><button id="simpan" class="btn btn-primary "> SIMPAN</button></td>
</table>
</form>
</div>
    <div class="panel-footer">
    <?php echo "Jumlah Sponsor Saat Ini:"; echo count($sponsor->result()); ?>
	<div class="pull right">
		<?php echo " Tanggal "; echo dateindo($date=date('Y-m-d'));?>
	</div>
    </div>
