<script type="text/javascript">
	$(document).ready(function  () {
		$("div#fedit").hide()
		$("a#det").click(function  () {
			var kode=$(this).attr('data-id')
			
			$("#detail").load('<?php echo site_url('kelolaMember/detail/+ kode +') ?>')
			$("#tblmember").hide("fast")
			return false
		})
	})
</script>
<div class=" panel panel-primary">
<div class="panel-heading">
	Kelola Member
</div>
<div id="tblmember" class="panel-body">
	<table class="table table-condensed table-hover table-bordered">
	<thead class="bg-primary"><th colspan="8">Tabel Member</thead>
	<thead class="bg-success">
		<th>No</th>
		<th>Nama Toko</th>
		<th>Email </th>
		<th>Password</th>
		<th>Nama Pemilik</th>
	
		<th>Kontak</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php $no=1; foreach ($member->result() as $row): ?>
		<tr  title="<?php echo $row->namatoko;?>" > 
			<td><?php echo $no++ ;?></td>
			<td><?php echo $row->namatoko;?></td>
			<td><?php echo $row->email;?></td>
			<td><?php echo $row->password;?></td>
			<td><?php echo $row->namapemilik;?></td>
		
			<td><?php echo $row->kontak;?></td>
			<td>
				<a id="det" data-id="<?php echo "$row->id";?>" class="btn btn-xs btn-primary btn-primary"><span class="glyphicon glyphicon-edit"></span> Detail</a>
				<a data-id="<?php echo "$row->id";?>" id="delete" href="" class="btn btn-xs btn-primary btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Hapus</a>
			</td>
		</tr>
	<?php endforeach;?>
	</tbody>	

	</table>

</div>
<div id="fedit" class="panel-body">
<form class="form-grop">
<table class="table">
	<td><input id="data" type="text" class="form-control" /></td>
	<td><input id="data" type="text" class="form-control" /></td>
	<td><input id="data" type="text" class="form-control" /></td>
	<td><input id="data" type="text" class="form-control" /></td>
	<td><input id="data" type="text" class="form-control" /></td>
</table>
</form>
<div id="detail">

</div>
</div>
    <div class="panel-footer">
    <?php echo "Jumlah Member Saat Ini:"; echo count($member->result()); ?>
	<div class="pull right">
		<?php echo " Tanggal "; echo dateindo($date=date('Y-m-d'));?>
	</div>
    </div>
