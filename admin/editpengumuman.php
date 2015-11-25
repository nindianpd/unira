<?php   
    require "connect.php";
        
    if(isset($_GET["id"]))
    {
    $id=$_GET['id'];
    $query = "select * from pengumuman where idpeng='$id'";
    $tampil = mysqli_query($conn,$query);
    $edit=mysqli_fetch_assoc($tampil);
    }
    
?>
<html><head>
<script type="text/javascript" src="plugin/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "lists,style,emotions,iespell,inlinepopups,searchreplace,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,undo,redo,|,forecolor,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview",
		theme_advanced_buttons3 : "removeformat,emotions",
		//theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
<!-- /TinyMCE -->
</script> <!-- =============================================== -->
    </head>
<body>    
<div class="content-wrapper">
  <section class="content">
          <div class="row">
            <div class="col-xs-12">
			 <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Edit Pengumuman</h3><br><br>          
                    <div class="form-group">					
                <form action="proseseditpeng.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">   
                
                <div class="form-group">   
				<input type="hidden" class="form-control" id="idpeng" name="idpeng" style="width:90%" placeholder="idpeng" value="<?php echo $edit['idpeng']; ?>" />
                </div>
                    
                <div class="form-group">    
				<label for="judul">Judul</label>
				<input type="search" class="form-control" id="judul" name="judul" style="width:90%" placeholder="Judul" value="<?php echo $edit['judul']; ?>" />
                </div>
				
                <div class="form-group">
				<label for="isi">Isi</label>
				<textarea name="isi" id="isi" cols="90" rows="16"><?php echo $edit['deskripsi']; ?></textarea>
                </div>
				
                <div class="form-group">    
				<label for="headline">Headline</label>
				<select name="slide" class="form-control" style="width:30%">
					<option value="<?php echo $edit['headline']; ?>" selected><?php echo $edit['headline']; ?></option>
                    <option value="No" >No</option>
					<option value="Yes" >Yes</option>
				</select>
				</div>
                    
                 <div class="form-group">    
				<label for="slide">Slide</label>
				<select name="slide" class="form-control" style="width:30%">
					<option value="<?php echo $edit['slide']; ?>" selected><?php echo $edit['slide']; ?></option>
                    <option value="No" >No</option>
					<option value="Yes" >Yes</option>
				</select>
				</div>
                
                
                    
                <div class="form-group">    
				<label for="gambar">Gambar</label><br>
				<?php echo "<img src='images/kecil_$edit[foto]'>" ?>
                </div>
                
                <label for="userfile">Pilih Gambar</label>
				<div class="form-group"></div>
				<input type="file" name="fupload" id="fupload" class="form-group" value="<?php echo $edit['foto']; ?>" />
				<div class="form-group"></div>
				* File yang diperbolehkan hanya dalam format <strong>gif,jpg,png,jpeg</strong> resolusi file gambar <strong>3000PX x 3000PX</strong> dan ukuran maksimal file sebesar <strong>3 MB</strong>
				<div class="form-group">
				<input type="hidden" name="id_param" value="" class="form-group"/>
				<input type="hidden" name="gambar" value="" class="form-group"/>
				<input type="hidden" name="tipe" value="tambah" class="form-group"/>
				<div class="form-group"></div>
				<button type="submit" class="btn btn-info" class="form-group"/>SIMPAN</button>
                </form></div></div></div></div></div>				
          
</section>		
				
      </div>
    </body>
</html>