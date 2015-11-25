<?php include "../includes/connect.php"; ?>
<div class="col-01 left">
<div class="block left sdw">
            <div class="col-title1"><h3>&nbsp;Lainnya..</h3></div>
            
            <div class="col-cont">
            	 			<ul>
                               <li><a href="beranda.php?page=allberita">Berita</a></li>
								<li><a href="beranda.php?page=allkegiatan">Kegiatan</a></li>
								<li><a href="beranda.php?page=allpengumuman">Pengumuman</a></li>
                            </ul>
            </div>
        </div>
        
        <div class="clear"></div>
    
    </div>
<div class="col-02 left">
    	<div class="post sdw">
        	
            <div class="post-title">
            	<?php 
    $id=$_GET['idheadline'];
    $query = "select * from headline where idheadline='$id'";
    $tampil = mysqli_query($conn,$query);
    $r=mysqli_fetch_assoc($tampil);
?>                
            	<h1><?php echo $r['judul']; ?></h1>
						<ul class="execute">
							<li><?php echo $r['tgl']; ?></li>
							
						</ul>
            </div>
            
            <div class="post-entry">
<?php echo "<img src='../admin/images/kecil_$r[foto]' alt='#' style='margin:5px 10px 10px 0; padding:6px; background:#f2f2f2; border:solid 1px #e2e2e2' align='left'  width='250' height='200'>" ?>  
            	<p><?php echo $r['keterangan']; ?></p>
                <br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
            
			        </div>
    </div>    
    <div class="clear"></div>