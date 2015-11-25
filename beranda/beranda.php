<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Universitas Madura</title>
    <meta name="Description" content="Meta Description - Home">
    <meta name="Keywords" content="Meta Keyword - Home">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->

    <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="../css/print.css" rel="stylesheet" type="text/css" media="print">
    <link href="../css/unira.css" rel="stylesheet" type="text/css" >
    <link rel="stylesheet" id="wpe-style-css" href="../css/style(1).css" type="text/css" media="all">

    
    <script type="text/javascript" async="" src="./js/ga.js"></script>
    <script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '']);
	  _gaq.push(['_setDomainName', 'unira.ac.id']);
	  _gaq.push(['_trackPageview']);
	  (function() 
       {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	   }
      )();
    </script>
    <script type="text/javascript">
        var site = {"base":"http:\/\/unira.ac.id"};
    </script>
</head>

<body>
<div id="wrapper">
<p><marquee width="650" onmouseover="this.stop()" onmouseout="this.start()" style="width: 650px;">:: Dies Natalies Universitas Madura :: </marquee></p>    
    <div id="header">
	<div id="backtotop">
			 <a href="#" target="_blank">
             <img src="../images/unira.png" alt="" width="550" height="100"></a>
    </div>
    </div>
<?php include "menu.php";?>    
    
<div id="main"> 
<?php include "isinya.php";?>    
<div class="clear"></div>
</div><!--end of MAIN-->
		

<div id="footer">
    <div class="linkfarm clearfix">
    	<div class="col-linkfarm left">
        <div class="center">
        	<a href="http://ub.ac.id/#backtotop"><strong></strong></a>
        	 <a>©2015 - Universitas Madura</a>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div> <!-- end of #wrapper -->

<style>
/*   auto popup   */
#popup-modal {
	display: none;
	position: absolute;
	top: 0%;
	left: 0%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index:1001;
	-moz-opacity: 0.8;
	opacity:.80;
	filter: alpha(opacity=80);
}

#popup-cnt {
	display: none;
	position: absolute;
	top: 25%;
	left: 25%;
	width: 50%;
	height: 50%;
	padding: 16px;
	border: 16px solid orange;
	background-color: white;
	z-index:1002;
	overflow: auto;
}
</style>

<div id="popup-modal"></div>
<div id="popup-cnt"></div>

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/organictabs.jquery.js"></script>

<script type="text/javascript">
	$(function() {
		$("#example-one").organicTabs();
		$("#example-two").organicTabs({
			"speed": 200
		});
		
		// auto popup
		if ($('.popup-auto').length > 0) {
			// init
			var raw = $('.popup-auto').html();
			$('#popup-cnt').html(raw);
			$('.popup-auto').html('');
			
			// show popup
			$('#popup-modal, #popup-cnt').show();
			
			// event
			$('#popup-cnt .close').click(function() {
				$('#popup-modal, #popup-cnt').hide();
			});
		}
	});
</script>
<script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
<script type="text/javascript">
        $(window).load(function() {
		$('.flexslider').flexslider({
		  animation: "slide",
		  controlsContainer: ".flex-container"
		});
    });
//BrowserDetect.isAllowed();
	function popUp(URL) {
	   newwindow=window.open(URL,'name','toolbar=0,scrollbars=yes,location=0,statusbar=0,menubar=0,resizable=0,width=900,height=730,left=250,top=0');
							if (window.focus) {newwindow.focus()}
						}
</script>
</body>
</html>
