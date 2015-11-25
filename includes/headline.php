<?php include "connect.php";?>
<div class="kanan ub-videos sdw">
		<div class="col-title">
			<img src="./images/headline.png" style="text-align:center;">
		</div>
		<div class="col-cont">
			<div class="newslink">
				<div id="rightdetail">
		          <div id="content_3">
<?php
    $query = "Select * from headline order by idheadline desc limit 0,1";
    $result = mysqli_query($conn,$query);
    while($r=mysqli_fetch_assoc($result))
    {
?>   
                      <table>
                        <tr>
                          <td><?php echo "<img src='admin/images/kecil_$r[foto]' style='display:block' width: '170px' height: '100px' padding-left:'5px'>"?>
                          </td>
                          <td>
                             <?php echo substr($r['keterangan'],0,100); ?>                
                                <em style="font-size:11px">
                                    <?php echo "......<br/><a href=beranda/beranda.php?page=headline&&idheadline=".$r['idheadline'].">"?>(selengkapnya)
                                </em></a>
                          </td>
                        </tr>
                      </table><?php }?>
                  </div>                  
                </div>
                <div class="clear"> </div>
			</div>
		</div>
	</div>