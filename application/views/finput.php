    <div class="row clearfix">
		<div class="col-md-12 column">
			
			
			<div class="modal fade" id="modal-container-799253" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title" id="myModalLabel">
								Input Data
							</h4>
						</div>
						<div class="modal-body">
							 <form action="<?php echo site_url('utama/ptambah'); ?>" method="post" role="form">
						<div class="form-group">
							 <label>Nim</label><input name="nim" class="form-control" id="nim" value="<?php $nim=rand(1,3000); echo "$nim";?>" type="text">
							 <label>Nama</label><input name="nama" class="form-control" id="nama" type="text">
						
							 <label >Alamat</label><input name="alamat" class="form-control" id="alamat" type="text">
					
                            <label>Jenis Kelamin</label>
                            <input type="radio" name="jk" value="Pria">Pria</input>
                            <input type="radio" name="jk" value="Wanita">Wanita</input>
                                <br>
							 <label>Hobby</label><br>
                                    <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
                                    <input type="checkbox" name="hobi[]" value="Memancing">Memancing<br>
                                    <input type="checkbox" name="hobi[]" value="membaca">Membaca<br>
                                    <input type="checkbox" name="hobi[]" value="Traveling">Travelling<br>
						</div> 
                            <button type="submit" name="submit" class="btn btn-primary">Input</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
					</form>
						</div>
						<div class="modal-footer">
							 <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>