<!doctype html>
<head>
  <meta charset="utf-8">
  <style>
  	html, body {
  		margin: 0;
      color: #403330;
  	}
  	body {
  		font-family: Helvetica;
		  background-color: #DBD0D5;
  	}
  	header#top-header {
  		padding-top: 5px;
      height: 44px;
  		border-bottom: 2px solid #333;
  		background: #3B606B;
	}
    .content-region {
    	width: 800px;
    	position: relative;
    	margin: 0 auto;
    	clear: both;
    }

    #logo {
    	left: -180px;
      width: 180px;
      height: 40px;
      position: absolute;
    }
  	#primary-nav, #secondary-nav {
  		display: inline;
  	}

    #primary-nav a, #secondary-nav a {
      vertical-align: middle;
      display: inline-block;
    }

    #primary-nav {
      position: absolute;
      top: 10px;
    }
  	#secondary-nav {
      position: relative;
      top: 10px;
  	}
    #icon {
      position: absolute;
      left: -44px;
    }

  	nav a {
  		font-size: 1.25em;
  		font-weight: bolder;
      padding-left: .75em;
      color: #DBD0D5;
  		text-decoration: none;
  	}

    nav a:hover {
      color: #20343B;
    }

    #main-content {
      position: relative;
    }


    h1 {
      font-size: 2em;
      margin: 0;
      padding-top: 0.5em;
    }
    h2 {
      margin-bottom: 0em;
      font-size: 1.25em;
    }

    h3 {
      font-size: 1em;
    }

    p {
      -webkit-margin-before: 0.5em;
      text-indent: 0em;
    }
    .rightSide {
      position: absolute;
      right: 0px;
    }

    .content-region-primary {
    }

    #main-content {
      float: left;
      width: 62%;
      background-color: white;
      padding: .5em;
      margin-top: 1em;

    }

    #sidebar {
      float: right;
      width: 34%;
    }

    #sidebar section {
      background-color: white;
      padding: .5em;
      margin-top: 1em;
    }

    .hr {
      width: 100%;
      height: 1px;
      background-color: #CECECE;
    }

  </style>
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