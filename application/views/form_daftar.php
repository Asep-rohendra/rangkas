<form action="<?php echo site_url('utama/daftar');?>" method="post" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend class="text-center">Daftar Baru</legend>
<div id="error"></div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div id="toko" class="form-group">
  <label class="col-md-4 control-label" for="toko">Nama Toko/ Pemilik</label>  
  <div class="col-md-4">
  <input id="toko" name="namatoko" type="text" placeholder="Nama Toko /Pemilik " class="form-control input-md" >
    
  </div>
</div>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="jenisjual">Jenis Penjualan</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="jenisjual-0">
      <input required type="radio" name="jenisjual" id="jenisjual-0" value="toko" >
      Toko / Perusahaan
    </label>
	</div>
  <div class="radio">
    <label for="jenisjual-1">
      <input required type="radio" name="jenisjual" id="jenisjual-1" value="orang">
      Perorangan
    </label>
	</div>
  <hr>
  <div class="checkbox">
  <label></label>

    <input id="setuju" required type="checkbox"/><p class="text-right">Saya menyetujui <a href="">Syarat & Ketentuan</a> Pasar Rangkas</p>
  </div>
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
    <button id="" name="" class="btn btn-success">Daftar</button>
    <button type="reset" id="reset" name="reset" class="btn btn-danger">Reset</button>
  </div>
</div>

</fieldset>
</form>
