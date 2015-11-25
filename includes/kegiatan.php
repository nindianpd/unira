<?php include "connect.php";?>
<div class="unira-event sdw left">
    	<div class="col-title">
        	<img src="./images/kegiatan.png" style="text-align:center;">
                <a href="http://unira.ac.id/berita/rss" class="feed">Feed</a>
        </div>

        <div class="col-cont">
            <div class="newslink">                
<?php
    $query = "Select * from kegiatan order by idkeg desc limit 0,3";
    $result = mysqli_query($conn,$query);
    while($r=mysqli_fetch_assoc($result))
    {
?>        
                <ul class="event">
                    <li><a target="_blank" title="<?php echo $r['judul'];?>" href="beranda/beranda.php?page=kegiatan&&idkeg=<?php echo $r['idkeg'] ?>"><?php echo $r['judul'];?></a></li>                  
                </ul><?php } ?>
            </div>
           <div class="col-cont">
                <div class="newslink">
                    <a href="beranda/beranda.php?page=allkegiatan"><h3 style="padding:5px" align="right"><u>kegiatan Lainnya</u></h3></a>
                </div>
            </div>
        </div>
    </div>