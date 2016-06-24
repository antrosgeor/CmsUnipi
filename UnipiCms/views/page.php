<div class="container">
<!--     <img style="max-width: 50%"class="img-responsive center-block " src="images/logo.jpg" alt="">       	   
 -->    <h1><?php echo $page['header'] ?></h1>
	    <p><?php echo $page['body_formated']?></p>
	    <?php if ($path['call_parts'][0] == "contact") {include(D_TEMPLATE."/map.php");} ?>

</div><!--end container-->




