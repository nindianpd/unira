<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch($page){
       
	    case 'pengumuman': {
						include 'isipengumuman.php';
			}break;
        
        case 'allpengumuman': {
						include 'allpengumuman.php';
			}break;
        case 'berita': {
						include 'isiberita.php';
			}break;
        case 'allberita': {
						include 'allberita.php';
            }break;
         case 'kegiatan': {
						include 'isikegiatan.php';
			}break;
        case 'allkegiatan': {
						include 'allkegiatan.php';
			}break;
        
        case 'headline': {
						include 'isiheadline.php';
			}break;
        case 'content': {
						include 'content.php';
			}break;
        case 'profil': {
						include 'profil.php';
			}break;
        case 'struktur': {
						include 'struktur.php';
			}break;
         case 'cari': {
						include 'cari.php';
			}break;
        case 'slide': {
						include 'slide.php';
			}break;
        
	   		
	}
	
}
?>

