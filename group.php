<?php

$content= <<<'contentT'

<head>
  <meta charset="utf-8">
  <link href='stylesheets/group.css' rel='stylesheet' type='text/css'>
</head>

<section>
	<h1>Default Student Group</h1>
	<p>This is the description for the default student group.  In this group, we talk about what its like being generic.  We also discuss ways to break out of the monotony we call our lives.  Join us or, if youre intelligent, dont.</p>
</section>

<section>
	<h1>Recent Projects</h1>

	<section class='block-projects block-projects-1' style="width: 200px; float:left; display:inline;">

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
	
	<section class='block-projects block-projects-2' style="width: 200px; float:left; display:inline;">

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

<section class="recentGroups">
		<header class="blockHeaders sidebarThree">
				<div class='rightSide'>
				<h2>Group Members</h2>
				<a href='#'>View All</a>
		</header>
			<ul class='projects-linear'>
				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placekitten.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Catbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placedog.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Dogbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placebear.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Bearbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placekitten.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Catbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placedog.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Dogbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placebear.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Bearbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placekitten.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Catbert</a></h3>
					</div>
				</li>

				<li class='project'>
					<div class="members">
						<a href='#'><img src='http://placedog.com/100/100'/></a>
					</div>
					<div class="membersName">
						<h3><a href='#'>Dogbert</a></h3>
					</div>
				</li>

			</ul>
</section>

sidebarT;

include_once "layout_theme.php";
