<html><head>
<script type="text/javascript">
	        function form_validation()
	        {
	            if ((adduser.nama.value === "")||(adduser.email.value === "")(adduser.username.value === "")||(adduser.pass2.value === "")||(adduser.pass.value === ""))
	            {
	                // tampilkan pesan kesalahan
	                alert("Periksa Inputan!");
	 
	                // memindahkan kursor ke input nama
	               // my_form.nama.focus();
	 
	                // gagalkan proses pengiriman data
	                return false;
	            }
                else if ((adduser.pass.value) != (adduser.pass.value))
                {// tampilkan pesan kesalahan
	                alert("Cek Password!");
                    return false;
                    }
	            else
	            {
	                // lanjutkan proses pengiriman data
	                return true;
	            }
	        }
</script>    
    </head>
<body>    
<div class="content-wrapper">
  <section class="content">
          <div class="row">
            <div class="col-xs-4">
			 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Tambah User</h3><br><br>          
                    <form action="simpanuser.php" name=adduser method="get" onsubmit="return form_validation();">
          <div class="form-group has-feedback">
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Full name"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="email" id="email" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" name="username" id="username" class="form-control" placeholder="username"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Retype password"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">                            
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>        

                 </div>
            </div>
            </div>
            </div>				
                 
</section>		
				
      </div>
    </body>
</html>