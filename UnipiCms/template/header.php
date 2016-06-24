<?php include ("config/setup.php");?>

<!DOCTYPE html>
<html>
<head>
    <title>UnipiCms</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  gia tis mixanes anazitisis-->
	<meta name="keywords" content="pc, cms, software technology, papei, university peiraius" />
	<!--perigrafi perilipsi -->
	<meta name="description" content="this is page for software technology of university peiraius " />
	<!--tipos selidas --> 
	<meta http-equiv="Content_type" content="text/html; charset=utf-8" />
	<!--sigrafeas tis selidas -->
	<meta name="author" content="Th.Fasoulas, A.Georgiou"  />
	<!-- //fortoni tin selida meta apo X sec -->
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<!-- //anakatefthinsi tis selidas meta apo X sec ths selidas url
	<meta http-equiv="refresh" content="5;url=http://deixto.com" /> -->
	<!-- //odigies ths se lidas pros programmata xartografisis kai deiktodotisis 
	<meta name="robots" content="index, nofollow"> -->
	<!--elexos tou caching an tha kratisis antigrafo tis selidas -->
	<meta http-equiv="pragma" content="no-cashe">
	<meta http-equiv="cache-control" content="no-cashe">
	<!-- //telos tis selidas apo to server meta tin li3i tis imeras
	<meta http-equiv="expires" content="Tue, 31 Dec 2008 23:59:59 GMT"> -->
	<!--ico logo -->
	<link rel="shortcut icon" href="images/pc.ico" />
    <?php include ("config/css.php");?>
	<?php include ("config/js.php");?>		
	 <link href="themes/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="wrap">

		<?php include(D_TEMPLATE."/navigation2.php") ?>
		
<!--
		<?php
			if ($parallax == 0) { ?>
				<header class="intro-header" style="background-image: url('images/home-bg-3.jpg')">
				    <div class="container">
				        <div class="row ">
				            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				                <div class="site-heading">
				                    <h1>Unipi Cms</h1>
				                    <hr class="small">
				                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
				                </div>
				            </div>
				        </div>
				    </div>
				</header>				
		<?php }
			else{?>
				<div class="bg"></div>
				<div class="jumbotron">
		            <header class="intro-header">
					    <div class="container">
					        <div class="row ">
					            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					                <div class="site-heading">
					                    <h1>Unipi Cms</h1>
					                    <hr class="small">
					                    <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
					                </div>
					            </div>
					        </div>
					    </div>
					</header>
				</div>						
		<?php } ?>
		-->
		<!--
			<div id="thumbs">
        		<div class="thumb">
            		(any HTML content)
        		</div>
       	 		<div class="thumb">
            		(any HTML content)
        		</div>
        
    		</div>
			   -->		   
			
		<div id="sliderFrame">
        	<div id="slider">
	            <a href="" target="_blank">
	                <img src="images/5.jpg" alt="Unipi Cms" />
	            </a>
	            <img src="images/1.jpg"  alt="Unipi"/>
	            <img src="images/4.jpg"  alt="Τεχνολογίας Λογισμικού"/>
	            <img src="images/10.jpg" alt="Unipi Cms"/>
	            <img src="images/6.jpg"  alt="Unipi"/>
	            <img src="images/7.jpg"  alt="Τεχνολογίας Λογισμικού"/>
	            <img src="images/8.jpg"  alt="Unipi Cms"/>
	            <img src="images/9.jpg"  alt="Unipi"/>
	            <img src="images/12.jpg" alt="Τεχνολογίας Λογισμικού"/>
	            <img src="images/2.jpg"  alt="Unipi Cms"/>		
        	</div>     
        </div>
	</div>
		
		
		<script>

			var jumboHeight = $('.jumbotron').outerHeight();
			function parallax(){
			    var scrolled = $(window).scrollTop();
			    $('.bg').css('height', (jumboHeight-scrolled) + 'px');
			}

			$(window).scroll(function(e){
			    parallax();
			});
	
		</script>