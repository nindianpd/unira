<?php include "../includes/connect.php";?>
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
            	<h1>BERITA</h1><br>               
 <?php 
//Langkah 1: Tentukan batas,cek halaman & posisi data
$batas=2;
$halaman=$_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

//Langkah 2: Sesuaikan perintah SQL
$tampil="select * from berita order by idberita desc limit $posisi,$batas ";
$hasil=mysqli_query($conn,$tampil);
while ($r=mysqli_fetch_assoc($hasil)){
?>                      
        <div class="newsHeadline">
            <h3><b><a class="headline-text" target="_blank" title="" href="beranda.php?page=berita&&idberita=<?php echo $r[idberita] ?>"><?php echo $r['judul'] ?></a></b>
            </h3>
            <div class="thumbs">
            <?php echo "<img src='../admin/images/kecil_$r[foto]' width='150' height='100' 
                    style='margin:5px 10px 10px 0; padding:6px; background:#f2f2f2; border:solid 1px #e2e2e2'>" ?>
            </div>
            <div class="desc">
            <?php echo $r['tgl']; ?> &nbsp;
            <?php echo substr($r['deskripsi'],0,250); ?>                   
            <a target="_blank" title="" href="beranda.php?page=berita">
    <em style="font-size:11px">&nbsp;&nbsp;&nbsp;<?php echo "......<br/><a href=beranda.php?page=berita&&idberita=".$r['idberita'].">" ?>&nbsp;&nbsp;(selengkapnya)</em></a>
            </div>
            <div class="clear"></div>
        </div><br><?php }

//Langkah 3: Hitung total data dan halaman 
$tampil2="select * from berita";
$hasil2=mysqli_query($conn,$tampil2);
$jmldata=mysqli_num_rows($hasil2);

$jmlhal  = ceil($jmldata/$batas);

echo "<div class=paging>";
// Link ke halaman sebelumnya (previous)
if($halaman > 1){
	$prev=$halaman-1;
	echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?page=allberita&&halaman=$prev>« Prev</a></span> ";
}
else{ 
	echo "<span class=disabled>« Prev</span> ";
}

// Tampilkan link halaman 1,2,3 ...
for($i=1;$i<=$jmlhal;$i++)
if ($i != $halaman){
	echo " <a href=$_SERVER[PHP_SELF]?page=allberita&&halaman=$i>$i</a> ";
}
else{
	echo " <span class=current>$i</span> ";
}

// Link kehalaman berikutnya (Next)
if($halaman < $jmlhal){
	$next=$halaman+1;
	echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?page=allberita&&halaman=$next>Next »</a></span>";
}
else{ 
	echo "<span class=disabled>Next »</span>";
}
echo "</div>";
echo "<p><center>Total : <b>$jmldata</b></center></p>"; 
?>        
                
    </div>    
</div> 
</div>
</div>