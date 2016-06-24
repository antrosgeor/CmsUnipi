<nav class="navbar navbar-inverse navbar-static-top" role="navigation"><!-- navbar-fixed-top / navbar-static-top  -->
	<?php if ($debug == 1) { ?>
	<button id= "btn-debug" class="btn btn-default"><i class="fa fa-bug"></i></button>
	<?php } ?>
	<div class="container">
		<div class = "navbar-brand">Admin</div>
		<button class = "navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
		</button>
		<div class = "collapse navbar-collapse navHeaderCollapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['fullname']; ?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="fa fa-lock"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="?page=dashboard">Dashboard</a></li>
				<li><a href="?page=messages">Messages</a></li>
				<li><a href="?page=pages">Pages</a></li>
				<li><a href="?page=news">News</a></li>
				<li><a href="?page=users">Users</a></li>
                <li><a href="?page=navigation">Navigation</a></li>
				<li><a href="?page=settings">Settings</a></li>
				
			</ul>
		</div>
	</div>
</nav><!-- END nav -->