
<form method="post" action="<?php echo site_url('login');?>" class="form-horizontal">
<fieldset>

<!-- Form Name -->

<h3 class="text-center">Silahkan Login!</h3>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input  id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-block btn-primary"><i class="glyphicon glyphicon-log-in"></i> Login</button>
  </div>
</div>

</fieldset>
</form>
