<?php foreach ($barang->result() as $key):?>
		<table class="table table-striped table-bordered table-condensed table-hover">
			<tr>
				<td width="50%" rowspan="7">
				<img class="img img-responsive" height="500" width="500" src="<?php echo site_url("src/img/$key->foto");?>">
				</td>
					<tr><td>Nama Barang</td><td><?php echo $key->namabarang;?></td></tr>
					<tr><td>Jenis </td><td><?php echo $key->jenis;?></td></tr>
					<tr><td>Harga </td><td><?php echo $key->harga;?></td></tr>
					<tr><td>Diskon</td><td><?php echo $key->discount;?></td></tr>
					<tr><td>Periode Diskon</td><td><?php echo dateindo($key->periodemulai); echo" s/d "; echo dateindo($key->periodeakhir);?></td></tr>
			</tr>
		</table>
<?php endforeach;?>
