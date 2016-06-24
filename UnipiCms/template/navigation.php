<nav class="navbar navbar-default navbar-fixed-top" role="navigation"><!--navbar-custom / navbar-default / navbar-inverse / navbar-static-top (optional) -->
	
	<!-- Debug Button -->
	<?php if ($debug == 1) { ?>
	<button id= "btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
	<?php } ?>

	<div class="container">
		
		<!-- Navbar Logo -->
		<div class = "navbar-brand">Unipi</div>
		
		
		
		

		
		<button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
	    </button>
		<div class = "collapse navbar-collapse navHeaderCollapse">
		    <ul class="nav navbar-nav navbar-right"><!--navbar-right optional --> 	
		    	<?php 
		    		nav_main($dbc,$path);	
		    	?>    	
		    </ul>
		</div>

	</div><!--end container-->

</nav><!--end nav-->