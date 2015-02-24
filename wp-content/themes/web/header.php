
<!DOCTYPE HTML>
<html>
<head>
<title>Free Doggy Website Template | Home :: w3layouts</title>
<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="web/js/move-top.js"></script>
<script type="text/javascript" src="web/js/easing.js"></script>
<script src="web/js/script.js" type="text/javascript"> </script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!--light box-->
<script src="web/js/superfish.js"></script>
<script type="text/javascript" src="web/js/jquery.lightbox.js"></script>
<link rel="stylesheet" type="text/css" href="web/css/lightbox.css" media="screen">
	<script type="text/javascript">
		$(function() {
			$('.gallery a').lightBox();
		});
   </script>	
</head>
<body>
<div class="header">	
     <div class="header-top">
		<div class="wrap">
	           <div class="logo">
			     <h1><a href="index.html">Doggy</a></h1>
		 	  </div>
		 	  <div class="menu">
			   		<ul>
						<li class="active"><a href="index.html">Home</a></li>
						<li class=""><a href="about.html">About</a></li>
						<li class=""><a href="services.html">Services</a></li>
						<li class=""><a href="gallery.html">Gallery</a></li>
						<li class=""><a href="contact.html">Contact</a></li>
					</ul>
					<div class="clear"></div>
	   		  	</div>
		 	  <div class="clear"></div> 
	    </div>
	</div>
	<div class="header-bottom">
		<div class="wrap">
		    <div class="section group example">
				<div class="col_1_of_header span_1_of_header">
				   <img src="<?php bloginfo( 'stylesheet_url' ); ?>/images/banner1.jpg" alt=""/>
 				</div>
				<div class="col_1_of_header span_1_of_header">
				   <h3>Lorem Ipsum is simply dummy</h3>
				   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
				   <button class="btn1 btn-1 btn-1a">Read More</button>
				</div>
				<div class="clear"></div> 
		    </div>
		 </div>
	</div>
</div>
<div class="main">