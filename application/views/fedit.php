                <?php foreach ($data->result() as $row) : ?>
				<form action="<?php echo site_url('utama/edit'); ?>" method="post" role="form">
				<div class="form-group">
				<label>Nim</label><input name="nim" class="form-control" id="nim" value="<?php echo ($row->nim) ;?>" type="text">
				<label>Nama</label><input name="nama" class="form-control" id="nama" type="text" value="<?php echo ($row->nama) ;?>">		
				<label >Alamat</label><input name="alamat" class="form-control" id="alamat" type="text" value="<?php echo ($row->alamat) ;?>">
					
                            <label>Jenis Kelamin</label>
                            <input type="radio" name="jk" value="Pria">Pria</input>
                            <input type="radio" name="jk" value="Wanita">Wanita</input>
                                <br>
							 <label>Hobby</label><br>
                                    <input type="checkbox" name="hobi[]" value="Olahraga">Olahraga<br>
                                    <input type="checkbox" name="hobi[]" value="Memancing">Memancing<br>
                                    <input type="checkbox" name="hobi[]" value="Memebaca">Membaca<br>
                                    <input type="checkbox" name="hobi[]" value="Traveling">Travelling<br>
						</div> 
                            <button type="submit" name="submit" class="btn btn-primary">Input</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
					</form>
                    <?php endforeach ;?>