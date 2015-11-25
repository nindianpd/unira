      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>UNIVERSITAS MADURA
            
            <small></small>
          </h1>
        </section>

<?php

require "connect.php";
 
if(isset($_COOKIE["username"])){
                     $login = "Welcome ".$_COOKIE["username"]."";
                     $logout= "Klik <a href=logout.php><b>Logout</b></a> untuk keluar dari halaman";
                      
}?>
          <!-- Main content -->
        <section class="content">
          <div class="callout callout-info">
            <?php
        
			echo "<h2>Selamat Datang</h2>
          <p><b>$login</b>, selamat datang di halaman Administrator.<br> Silahkan klik menu pilihan untuk mengelola content website. </p>
          <p>$logout</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>";?>
          </div>
          <!-- Default box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
