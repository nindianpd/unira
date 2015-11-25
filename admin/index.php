<?php 
    if(isset($_COOKIE["username"])){
     header('location:administrator.php?page=content');               
                    
                    }
                    else
                { 
            ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrator</title>
	<link rel="stylesheet" href="bootstrap/css/spacelab.css">
	<style>
	body { 
	<!--background: url(images/bg.jpg);-->
	}
	.trans{
	margin-top: 50px;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="col-md-12">		
		<div class="col-md-4 well trans col-md-offset-4">
			<form role="form" action="proseslogin.php" method="post">
				<legend><img src="../images/gold.png" alt="" class="img-responsive img-rounded"></legend>
				<div class="form-group">
					<div class="input-group">					
						<span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
						<input type="text" class="form-control" id="" placeholder="Masukkan Nama" required="required" name="user">                    
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">					
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
						<input type="password" class="form-control" id="" placeholder="Password" required="required" name="pwd">                    
					</div>					
				</div>
				<button type="submit" class="btn btn-primary btn-block">LOGIN</button>
			</form>
		</div>
	</div>

</div>
<script type="text/javascript" src="bootstrap/js/jquery-2.1.1.min.js"></script>	
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>	
</body>
</html>
<?php } ?>