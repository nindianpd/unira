<?php 
if (empty($_GET["message"]))
$isi="";
else
$isi=$_GET["message"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Layanan Informasi Kampus</title>
	<link rel="stylesheet" href="../css/cerulean.css" type="text/css">
	<link rel="shortcut icon" href="favicon11.ico"/>	
<style>
	body{
	background-image: url(../images/bg.jpg);
	margin-top: 80px;
	}
	hr.style-two {
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left, rgba(239,239,8,0), rgba(239,239,8,0.75), rgba(239,239,8,0)); 
    background-image:    -moz-linear-gradient(left, rgba(239,239,8,0), rgba(239,239,8,0.75), rgba(239,239,8,0)); 
    background-image:     -ms-linear-gradient(left, rgba(239,239,8,0), rgba(239,239,8,0.75), rgba(239,239,8,0));  
    background-image:      -o-linear-gradient(left, rgba(239,239,8,0), rgba(239,239,8,0.75), rgba(239,239,8,0)); 
}
	.modal-dialog{
	margin-top: 240px;
	}
	.modal-header{
	background-image: url(../images/bg.jpg);
	color: #BFBF00;
	}
	.modal-title{
	font-size: 40px;
	font-weight: 600;
	color: #BFBF00;
	text-shadow:0px 0px 3px #BFBF00;
	}
	</style>
</head>
<body>
<div class="container">
	<p class="text-center"><img src="../images/headerlik.png" alt="" width="80%"></p>
	<hr class="style-two">
	<div class="col-md-4 col-md-offset-4">
		<form class="form-signin" role="form" action="login_proses.php" method="post" >
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-user" title="Masukkan NIM Anda" data-placement="left"></span></div>
					<input type="text" class="form-control" id="" placeholder="NIM" name="nim">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<div class="input-group-addon"><span class="glyphicon glyphicon-lock"  title="Masukkan Password Anda" data-placement="left"></span></div>
					<input type="password" class="form-control" id="" placeholder="Password" name="nopin">
				</div>
			</div>
			<div class="form-group">
				<p class="help-block"><a href="#" data-toggle="modal" data-target="#lupa">Lupa Password</a></p>
			</div>
			<button type="submit" class="btn btn-info btn-block">Masuk</button>
		</form>
	</div>
	
	<!--<form class="form-signin" role="form">
		<input type="text" id="" class="form-control" placeholder="NPM" required autofocus>
		<input type="password" id="" class="form-control" placeholder="Password" required>
		<div class="checkbox">
			<a href="#" data-toggle="modal" data-target="#lupa">Lupa Password</a>
		</div>
		<button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
	</form>-->
</div>
<div class="modal fade" id="lupa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="myModalLabel">LUPA PASSWORD?</h4>
			</div>
		<div class="modal-body">
			<p>Jika anda lupa password silahkan menghubung SIMAT - BAA</p>
		</div>
		<!--<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		</div>-->
    </div>
  </div>
</div>
<!--<div class="modal" id="pengumuman" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove"></span></button>
				<h2 class="modal-title text-center" id="pengumuman">PENGUMUMAN</h2>
			</div>
		<div class="modal-body">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius laborum quod commodi cum debitis blanditiis quaerat vero aspernatur aut optio fuga atque quasi unde harum ab nesciunt molestias quidem quae!</p>
		</div>
    </div>
  </div>
</div>-->
<script type="text/javascript" src="assets/bootstrap/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
<script>
$('#pengumuman').modal('show');
$('.glyphicon-user').tooltip();
$('.glyphicon-lock').tooltip();
</script>
</body>
</html>
