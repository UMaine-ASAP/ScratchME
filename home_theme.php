<?php

$content= <<<'contentT'

<head>
  <meta charset="utf-8">
  <link href='stylesheets/home.css' rel='stylesheet' type='text/css'>
</head>

<section>
	<h1>Scratch Maine</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>

	<section>
		<h2>What is Scratch?</h2>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur.
		<p>
		<span><a href='#'>Questions</a></span>
		<span><a href='#'>Scratch Tutorials</a></span>
		<span><a href='#'>Scratch Tool</a></span>
	</section>

	<section>
		<h2>Are you an Educator?</h2>
		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. <a href='#'>Educators</a>
	</section>
</section>

<section>
	<h1>Scratch Projects</h1>

	<section class='block-projects block-projects-1'>

		<header class="blockHeaders mainOne">
				<h2>Latest</h2>
				<a class='view-all' href='#'>View All</a>
		</header>

		<ul class='projects'>
			<li class='project'>
				<a><img src='http://placekitten.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placekitten.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placekitten.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placekitten.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placekitten.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
		</ul>
	</section>
	
	<section class='block-projects block-projects-2'>

			<header class="blockHeaders mainTwo">
				<h2>Most Viewed</h2>
				<a class='view-all' href='#'>View All</a>
		</header>

		<ul class='projects'>
			<li class='project'>
				<a><img src='http://placedog.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placedog.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placedog.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placedog.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
			<li class='project'>
				<a><img src='http://placedog.com/100/100'/></a>
				<a class='title' href='#'>Title Here</a>
			</li>
		</ul>
	</section>

</section>

contentT;


$sidebar = <<<'sidebarT'

<section class="map">
<header class="blockHeaders sidebarOne">
	<h2>Project Map</h2>
</header>
	<iframe width="260" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=45.089036,-69.125977&amp;spn=5.429508,5.712891&amp;z=6&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=45.089036,-69.125977&amp;spn=5.429508,5.712891&amp;z=6&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</section>


<section class="recentGroups">
		<header class="blockHeaders sidebarThree">
				<div class='rightSide'>
				<h2>Recent Groups</h2>
				<a class='view-all' href='#'>View All</a>
		</header>
			<ul class='projects-linear'>
				<li class='project'>
					<div class="groupItems">
						<a href='#'><img src='http://placekitten.com/100/100'/></a>
					</div>
					<div class="groupItems">
						<h3><a href='#'>Environment</a></h3>
						<div class='group-member-count'>25 members</div>
						<div class='group-project-count'>125 projects</div>
					</div>
				</li>

				<li class='project'>
					<div class="groupItems">
						<a href='#'><img src='http://placedog.com/100/100'/></a>
					</div>
					<div class="groupItems">
						<h3><a href='#'>SimStream</a></h3>
						<div class='group-member-count'>25 members</div>
						<div class='group-project-count'>125 projects</div>
					</div>
				</li>

				<li class='project'>
					<div class="groupItems">
						<a href='#'><img src='http://placebear.com/100/100'/></a>
					</div>
					<div class="groupItems">
						<h3><a href='#'>Learning</a></h3>
						<div class='group-member-count'>25 members</div>
						<div class='group-project-count'>125 projects</div>
					</div>
				</li>
			</ul>
</section>

<section class="discussion">
	<header class= "blockHeaders sidebarTwo">
		<h2>Discussions</h2>
	</header>
	<article>
		<h3>Topic 1</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</article>
</section>
</div>

sidebarT;

include_once "layout_theme.php";
