<!--Navbar-->
<div class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle Navigation</span>span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand" href="<?php echo $home_url; ?>admin/index.php">Admin</a>
		</div>
		
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?php echo $page_title=="Admin Index" ? "class='active'" : ""; ?>>
					<a href="<?php echo $home_url; ?>admin/index.php">Home</a>
				</li>
				<!--highlight for user related pages -->
				<li <?php
					echo $page_title=="Users" ? "class='active'" : ""; ?>>
					<a href="<?php echo $home_url; ?>admin/read_users.php">Users</a>
				</li>
			</ul>
			
			<!--options in the upper right corner of the page -->
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						&nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?>
						&nbsp;&nbsp;<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<!--log out user -->
						<li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!--/.nav-collapse-->
	</div>
</div>
<!-- /navbar -->