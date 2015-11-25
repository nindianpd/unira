<?php include "connect.php"; ?> 
<div class="homeslider left">  
    
    	   <div class="flexslider" style="overflow: hidden;">
               
        	   <ul class="slides" style="-webkit-transition-duration: 0.6s; transition-duration: 0.6s; width: 2000%; -webkit-transform: translate3d(-2800px, 0px, 0px);">
<?php
    $query = "Select * from slide order by idslide desc limit 0,2";
    $result = mysqli_query($conn,$query);
    while($r=mysqli_fetch_assoc($result))
    {
    ?>
                   
                 <li class="clone" style="width: 700px; float: left; display: block;"><a href="beranda/beranda.php?page=slide&&idslide=<?php echo $r['idslide'] ?>"><?php echo "<img src='admin/images/$r[foto]'>"?></a>
                 </li>
            	 <?php } ?>
               </ul>
               <ol class="flex-control-nav">
                   <li><a class="">1</a></li>
                   <li><a class="">2</a></li>
                   <li><a class="">3</a></li>
               </ol>
               <ul class="flex-direction-nav">
                   <li><a class="prev" href="#">Previous</a></li>
                   <li><a class="next" href="#">Next</a></li>
               </ul>
            </div><!-- end of flexslider -->
        </div>