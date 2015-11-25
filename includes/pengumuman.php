<?php include "connect.php";?>
<div class="unira-pengumuman sdw left">
    <div class="col-title">                
            <img src="./images/pengumuman.png" style="text-align:center;">
           <!-- <a href="http://unira.ac.id/berita/rss" class="feed">Feed</a>-->
    </div>
    
<?php
    $query = "Select * from pengumuman order by idpeng desc limit 0,3";
    $result = mysqli_query($conn,$query);
    while($r=mysqli_fetch_assoc($result))
    {
?>    
    
    <div class="col-cont" style="padding-bottom:0">
        <div class="newsHeadline">
            <h3><b><a class="headline-text" target="_blank" title="" href="beranda/beranda.php?page=pengumuman&&idpeng=<?php echo $r['idpeng'] ?>"><?php echo $r['judul'];?></a></b>
            </h3>
            <div class="thumbs">    
			     <?php echo "<img src='admin/images/kecil_$r[foto]' width='150' height='100' 
                    style='margin:5px 10px 10px 0; padding:6px; background:#f2f2f2; border:solid 1px #e2e2e2'>" ?>
            </div>
            <?php echo substr($r['deskripsi'],0,100); ?>                
            <em style="font-size:11px">
                <?php echo "......<br/><a href=beranda/beranda.php?page=pengumuman&&idpeng=".$r['idpeng'].">"?>(selengkapnya)
            </em></a>
            <div class="clear"></div>
        </div><br> 
  </div><?php } ?>
<div class="col-cont">
    <div class="newslink">
        <a href="beranda/beranda.php?page=allpengumuman"><h3 style="padding:5px" align="right"><u>Pengumuman Lainnya</u></h3></a>
    </div>
</div>
</div>