<script type="text/javascript">
	$(document).ready(function  (){
		$("a#detail").click(function()
		{
			var kode=$(this).attr('href')
			$("#konten").load('<?php echo site_url('utama/sendMail/') ;?>')
			return false
		});
	});
</script>
<?php foreach ($barang->result() as $key): ?>
<div class="col-md-4" id="detail" name="<?php echo $key->kode;?>" title="<?php echo $key->namabarang;?>" onClick="detail()">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">
<?php echo $key->namabarang;?>						
</h3>
</div>
<div class="panel-body text-center">
	<img  width="100" height="100" src="<?php echo base_url("src/img/$key->foto");?>">
</div>
<div class="panel-footer">
    <table class="table table-condensed">
    <tr>
        <td class="text-left"><p class="text-muted"><?php echo "Rp. $key->harga";?></p>  </td>
        <td class="text-right"><a id="detail" href="<?php echo "$key->kode";?>" class="btn btn-info">Detail <span class="glyphicon glyphicon-forward"></span></a></td>
    </tr>
    </table>
	
</div>
</div>
</div>
<?php endforeach ?>	