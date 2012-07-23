<!doctype html>

<link href='http://fonts.googleapis.com/css?family=Andika' rel='stylesheet' type='text/css'>
<head>
  <meta charset="utf-8">
  <style>
  	html, body {
  		margin: 0;
      color: #403330;
  	}
  	body {
  		font-family: 'Andika', sans-serif;
		  background-color: white;
  	}
  	header#top-header {
  		padding-top: 5px;
      height: 44px;
  		border-bottom: 2px solid #333;
  		background: #3B606B;
	}
    .content-region {
    	width: 1024px;
    	position: relative;
    	margin: 0 auto;
    	clear: both;
    }

    #logo {
    	left: 0px;
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
      left: 200px;
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
      color: white;
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
      float:right;
      display:inline;
      right: 50px;
    }

    .content-region-primary {
    }

    #main-content {
      float: left;
      width: 69%;
      background-color: white;
      margin-top: 0em;
      padding: 0em;
    }

    #main-content section .block-projects {
      border-style:solid;
      border-width:.5em;
      -webkit-border-radius: 0px 0px 15px 15px;
      border-radius: 0px 0px 15px 15px;
      border-color:#769946;
      margin: 1em;
      width: 97.75%;
    }

    #main-content section .block-projects-1 {
      border-color:#769946;
      margin-bottom: 10px;
      margin-left: 0px;
      margin-top:0px;
    }

    #main-content section .block-projects-2 {
      border-color:#3B606B;
      margin: 0px;
    }

    #main-content section .block-projects .project {
      padding: 1em;
      float:auto;
    }

    #sidebar {
      float: right;
      width: 29%;
    }

    #sidebar section {
      background-color: white;
      padding: .5em;
      margin-bottom: 1em;
      border-style:solid;
      border-width:.5em;
       -webkit-border-radius: 0px 0px 15px 15px;
      border-radius: 0px 0px 15px 15px;
    }


    .hr {
      width: 100%;
      height: 1px;
      background-color: #CECECE;
    }

    .block-projects h2{
      padding-left: 19px;
    }

    section p a {
      margin: 60px;
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