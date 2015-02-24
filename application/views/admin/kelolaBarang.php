<script type="text/javascript">
	$('a#detail').click(function() 
{
var kode=$(this).attr('data-id'); 
$.ajax({
url : ' <?php echo base_url();?>'adminRangkas/kelolaMember/detail/+data,
success : function(data){
alert(data);
}
});
});
</script>
<div class=" panel panel-primary">
<div class="panel-heading">
	Kelola Barang
</div>
<div class="panel-body">
	<table class="table table-condensed table-hover table-bordered">
	<thead class="bg-primary"><th colspan="8">Tabel Barang</thead>
	<thead class="bg-success">

		<th>No</th>
		<th>Kode</th>
		<th>Nama Barang</th>
		<th>Jenis Barang</th>
		<th>Harga</th>
		<th>Aksi</th>
	</thead>
	<tbody>
	<?php $no=1; foreach ($barang->result() as $row): ?>
		<tr title="<?php echo $row->namabarang;?>s" >
			<td><?php echo $no++ ;?></td>
			<td><?php echo $row->kode;?></td>
			<td><?php echo $row->namabarang;?></td>
			<td><?php echo $row->jenis;?></td>
			<td><?php echo "Rp. $row->harga";?></td>
			<td class="text-center">
				<a id="detail" data-id="<?php echo $row->kode;?>" class="btn btn-xs btn-primary btn-primary"><span class="glyphicon glyphicon-edit"></span> Detail</a>
				<a href="#" class="btn btn-xs btn-primary btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> Hapus</a>
			</td>
		</tr>
	<?php endforeach;?>
	</tbody>	
	</table>
    </div>
        <div class="panel-footer">
    <?php echo "Jumlah Barang Saat Ini:"; echo count($barang->result()); ?>
	<div class="pull right">
		<?php echo " Tanggal "; echo dateindo($date=date('Y-m-d'));?>
	</div>
    </div>