<?php include "connect.php";?>
<div class="unira-event sdw left">
    	<div class="col-title">
        	<img src="./images/berita.png" style="text-align:center;">
                <a href="http://unira.ac.id/berita/rss" class="feed">Feed</a>
        </div>

        <div class="col-cont">
            <div class="newslink">                
<?php
    $query = "Select * from berita order by idberita desc limit 0,3";
    $result = mysqli_query($conn,$query);
    while($r=mysqli_fetch_assoc($result))
    {
?>        
                <ul class="event">
                    <li><a target="_blank" title="<?php echo $r['judul'];?>" href="beranda/beranda.php?page=berita&&idberita=<?php echo $r['idberita'] ?>"><?php echo $r['judul'];?></a></li>                  
                </ul><?php } ?>
            </div>
           <div class="col-cont">
                <div class="newslink">
                    <a href="beranda/beranda.php?page=allberita"><h3 style="padding:5px" align="right"><u>Berita Lainnya</u></h3></a>
                </div>
            </div>
        </div>
    </div>