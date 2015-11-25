<?php
if(isset($_GET['page'])){
	$page = $_GET['page'];
	switch($page){
       
	    case 'addpeng': {
						include 'addpengumuman.php';
			}break;
        case 'editpeng': {
						include 'editpengumuman.php';
			}break;
        
        case 'addberita': {
						include 'addberita.php';
           }break;
        case 'editberita': {
						include 'editberita.php';
			}break;
        case 'addkegiatan': {
						include 'addkegiatan.php';
			}break;
        case 'editkegiatan': {
						include 'editkegiatan.php';
			}break;
        case 'editpage': {
						include 'editpage.php';
			}break;
        case 'adduser': {
						include 'adduser.php';
			}break;
        case 'edituser': {
						include 'edituser.php';
			}break;
        case 'content': {
						include 'content.php';
			}break;
        
	   		
	}
	
}
?>

