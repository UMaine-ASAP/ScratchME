<?php

$content= <<<'contentT'
<section>
	<h1>Scratch Maine</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.</p>

	<section>
		<h2>What is Scratch?</h2>
		<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur.
		<p>
		<span><a href='#'>Questions</a></span> <span><a href='#'>Scratch Tutorials</a></span>
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
		<header>
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
		</ul>
	</section>

	<section class='block-projects block-projects-2'>
		<header>
			<h2>Most Viewed</h2>
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
		</ul>
	</section>

</section>

<style>
.projects {
	margin: 0;
	padding: 0;
}

.projects-linear {
	margin: 0.25em 0;
	padding: 0;
	width: 85%;
	display: inline-block;
}

.project {
	list-style-type: none;
	display: inline-block;
}

.project .title { 
	display: block;
	font-size: 13px;
}

.block-projects {
	width: 48%;
	display: inline-block;
	position: relative;
}

.block-projects-1 { margin-right: 1em; }

.block-projects h2 {  display: inline-block; }
.block-projects .view-all { 
	position: absolute; 
	right: 0;
	top: 20px;
	right: 10px;
}

.block-projects .project { padding: 0.5em; }

.group { margin-left: 10px; }

.group header {
	margin-top: 0.5em;
	height: 1em;
	position: relative;

}
.group h3 {
	float: left;
	-webkit-margin-before: 0;
	-webkit-margin-after: 0;	
}

.group p {
	margin-top: 0.15em;
	margin-bottom: 0.15em;
}

.group .view-all {
	position: relative;
	top: 50px;
	float: right;
}

.group header .group-project-count, .group header .group-member-count {
	font-size: 14px;
	display: block;
}

</style>
<section>
	<h1>Groups</h1>

	<section>
		<h2>Most Viewed</h2>
		<section class='group'>
			<header>
				<h3><a href='#'>Environment</a></h3>
				<div class='rightSide'>
					<span class='group-member-count'>25 members</span>
					<span class='group-project-count'>125 projects</span>
				</div>
			</header>
			<p>Description of group goes here.</p>
			<ul class='projects-linear'>
				<li class='project'>
					<a href='#'><img src='http://placekitten.com/100/100'/></a>
				</li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>				
			</ul>
			<a class='view-all' href='#'>View All</a>
		</section>
		<div class='hr'></div>
		<section class='group'>
			<header>
				<h3><a href='#'>Environment</a></h3>
				<div class='rightSide'>
					<span class='group-member-count'>25 members</span>
					<span class='group-project-count'>125 projects</span>
				</div>
			</header>
			<p>Description of group goes here.</p>
			<ul class='projects projects-linear'>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>				
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
			</ul>
			<a class='view-all' href='#'>View All</a>
		</section>
		<div class='hr'></div>
		<section class='group'>
			<header>
				<h3><a href='#'>Environment</a></h3>
				<div class='rightSide'>
					<span class='group-member-count'>25 members</span>
					<span class='group-project-count'>125 projects</span>
				</div>
			</header>
			<p>Description of group goes here.</p>
			<ul class='projects projects-linear'>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>				
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
				<li class='project'><a href='#'><img src='http://placekitten.com/100/100'/></a></li>
			</ul>
			<a class='view-all' href='#'>View All</a>
		</section>
	</section>
</section>


contentT;

$sidebar = <<<'sidebarT'

<section>
	<iframe width="260" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=45.089036,-69.125977&amp;spn=5.429508,5.712891&amp;z=6&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=45.089036,-69.125977&amp;spn=5.429508,5.712891&amp;z=6&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</section>

<section>
	<h2>Discussions</h2>
	<article>
		<h3>Topic 1</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</article>
</section>

sidebarT;

include_once "layout.php";
