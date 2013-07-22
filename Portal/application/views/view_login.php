<!--<div style="width: 100%; height:100%; background: url(<?php echo base_url();?>/img/blueworld.jpg);"> -->
<div class="container">

	<div class="row" style="margin-top:10%;">
		<div class="span4 offset4 well">
			<img src="<?php echo base_url(); ?>/img/portalLogo.png" />
			<legend>Uye Girisi</legend>
          	<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
			<form method="POST" action="" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="E-posta">
			<input type="password" id="password" class="span4" name="password" placeholder="Sifre">
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Beni Hatirla
            </label>
			<button type="submit" name="submit" class="btn btn-info btn-block">Giris</button>
			</form>    
		</div>
	</div>
</div>
</div>