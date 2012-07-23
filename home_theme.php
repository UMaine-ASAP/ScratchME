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

		<header style="background-color:#769946; height:25px; margin-bottom:0px; -webkit-border-radius: 15px 15px 0px 0px;
				border-radius: 15px 15px 0px 0px;">
				<h2 style="display:inline; padding-left:15px;">Latest</h2>
				<a class='view-all' href='#'>View All</a>
		</header>

	<section class='block-projects block-projects-1'>
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

		<header style="background-color:#3B606B; height:25px; margin-bottom:0px; -webkit-border-radius: 15px 15px 0px 0px;
				border-radius: 15px 15px 0px 0px;">
				<h2 style="display:inline; padding-left:15px;">Most Viewed</h2>
				<a class='view-all' href='#'>View All</a>
		</header>
	
	<section class='block-projects block-projects-2'>
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

<style>
.projects {
	margin: 0;
	padding: 0;
}

.projects-linear {
	padding: 0;
	width: 100%;
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
	width: 36%;
	display: inline-block;
	position: relative;
}

.block-projects-1 { margin-right: 1em;}

.block-projects h2 {  display: inline-block; }
.block-projects .view-all { 
	position: absolute; 
	right: 0;
	top: 20px;
	right: 10px;
	left:88%;
}

.block-projects .project { padding: 0.5em; }

.group { margin-left: 10px;}

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

.discussion {
	border-color:#F5D769;
}

.recentGroups {
	border-color:#8C4432;
}

.map {
	border-color: #6B1E3D;
}

</style>



contentT;

$sidebar = <<<'sidebarT'

<section class="map">
	<iframe width="260" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=45.089036,-69.125977&amp;spn=5.429508,5.712891&amp;z=6&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/?ie=UTF8&amp;t=m&amp;ll=45.089036,-69.125977&amp;spn=5.429508,5.712891&amp;z=6&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
</section>

<section class="discussion">
	<h2>Discussions</h2>
	<article>
		<h3>Topic 1</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
	</article>
</section>

<header style="background-color:#8C4432; height:40px; margin-bottom:0px; -webkit-border-radius: 15px 15px 0px 0px;
				border-radius: 15px 15px 0px 0px;">
				<h2 style="display:inline; padding-left:15px;">Recent Groups</h2>
				<a class='view-all' href='#'>View All</a>
		</header>
			<header>
				<div class='rightSide'>
			</header>

<section class="recentGroups">
			<ul class='projects-linear'>
				<li class='project'>
					<div style="float:left; display:inline;">
						<a href='#'><img src='http://placekitten.com/100/100'/></a>
					</div>
					<div style="float:left; display:inline; padding-left: 10px;">
						<h3><a href='#'>Environment</a></h3>
						<div class='group-member-count'>25 members</div>
						<div class='group-project-count'>125 projects</div>
					</div>
				</li>

				<li class='project'>
					<div style="float:left; display:inline;">
						<a href='#'><img src='http://placedog.com/100/100'/></a>
					</div>
					<div style="float:left; display:inline; padding-left: 10px;">
						<h3><a href='#'>SimStream</a></h3>
						<div class='group-member-count'>25 members</div>
						<div class='group-project-count'>125 projects</div>
					</div>
				</li>

				<li class='project'>
					<div style="float:left; display:inline;">
						<a href='#'><img src='http://placebear.com/100/100'/></a>
					</div>
					<div style="float:left; display:inline; padding-left: 10px;">
						<h3><a href='#'>Learning</a></h3>
						<div class='group-member-count'>25 members</div>
						<div class='group-project-count'>125 projects</div>
					</div>
				</li>

			</ul>
</section>

sidebarT;

include_once "layout_theme.php";
