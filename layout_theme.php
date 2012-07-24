<!doctype html>

<head>
  <meta charset="utf-8">
  <link href='http://fonts.googleapis.com/css?family=Andika' rel='stylesheet' type='text/css'>
  <link href='stylesheets/layout.css' rel='stylesheet' type='text/css'>
</head>

<body>
	<div id='all-content'>
		<header id='top-header'>
			<div class='content-region'>
				<a href='#'><img id='logo' src='ScratchME_Site_Logo1.4.png'/></a>
				<nav id='primary-nav'>
					<a href='#'>Groups</a>
						<a href='#'>Educators</a> 
				</nav>

       <div class='rightSide'>
          <!--<a href='#'><img id='icon' src='http://www.placekitten.com/40/40'/></a>-->
				  <nav id='secondary-nav'>
            <!--
				  	<a href='#'>My Projects</a>
				  	<a href='#'>Profile</a>					
	 			 	  <a href='#'>Log Out</a>					
          -->
            <a href='#'>Log In</a>         
            <a href='#'>Register</a>         

  				</nav>
      </div>
			</div>
		</header>
		<div class='content-region content-region-primary'>
			<section id='main-content'>
				<?php echo $content;?>
			</section>
			<aside id='sidebar'>
				<?php echo $sidebar;?>
			</aside>
		</div>
		<footer>
		</footer>
	</div>
</body>
</html>