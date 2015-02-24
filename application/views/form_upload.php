<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Upload Barang !</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Barang</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama Barang" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tipe">Tipe</label>
  <div class="col-md-4">
    <select id="tipe" name="tipe" class="form-control">
      <option value="Samsung">Samsung</option>
      <option value="Nokia">Nokia</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="discount">Discount</label>  
  <div class="col-md-4">
  <input id="discount" name="discount" type="text" placeholder="Jika ada discount !" class="form-control input-md">
    
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="harga">Harga</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">Rp.</span>
      <input id="harga" name="harga" class="form-control" placeholder="" type="text" required="">
    </div>
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="statusharga">Status Harga</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="statusharga-0">
      <input type="radio" name="statusharga" id="statusharga-0" value="Nego" checked="checked">
      Nego
    </label>
	</div>
  <div class="radio">
    <label for="statusharga-1">
      <input type="radio" name="statusharga" id="statusharga-1" value="Net">
      Net
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kondisi">Kondisi</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="kondisi-0">
      <input type="radio" name="kondisi" id="kondisi-0" value="baru" checked="checked">
      Baru
    </label>
	</div>
  <div class="radio">
    <label for="kondisi-1">
      <input type="radio" name="kondisi" id="kondisi-1" value="bekas">
      Bekas
    </label>
	</div>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="foto">Foto</label>
  <div class="col-md-4">
    <input id="foto" name="foto" class="input-file" type="file">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="deskripsi">Deskripsi</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="deskripsi" name="deskripsi">Deskripsikan Barang anda</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
    <button id="" name="" class="btn btn-primary">Upload</button>
    <button id="Reset" name="Reset" class="btn btn-danger">Reset</button>
  </div>
</div>

</fieldset>
</form>
