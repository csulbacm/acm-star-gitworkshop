<!doctype html>
<?php include("inc/func.php") ?>
<html>
	<head>
            <title>
                <?php 
                    if(isset($title)) {
                        echo "acm* + eat git workshop: " . $title;    
                    } else {
                        echo "acm* + eat git workshop";
                    }
                ?>
            </title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/960.css">
		<script src="js/live.js"></script>
	</head>
	<body>
		<header>
			<div id="heromast">
				<div class="container_12">
					<div class="grid_5">
						<h1><a href="index.php">Git in <br> &nbsp;the Habit</a></h1>
				<h2><a href="index.php">26th October 2013</a></h2>
					</div>

					<div class="grid_4 push_3 event-details">
						<ul>
							<li>
								<strong>Saturday,</strong>
							</li>
							<li>
								<strong>October 26th 2013</strong>
							</li>
							<li>10:00AM &mdash; 12:00PM</li>
							<li>ECS&mdash;304</li>
						</ul>
					</div>
				</div>

				<nav>
					<div class="container_12">
							<ul class="grid_12">
							<li><a href="index.php">Home</a></li>
							<li><a href="signup.php">Workshop Sign-Up</a></li>
                            <li><a href="prereq.php">Requirements</a></li>
                            <li><a href="gitcli.php">Bash Shell Review</a></li>
                            <li><a href="about.php">About</a></li>
						</ul>
					</div>				
				</nav>
			</div>
		</header>

		<div class="body-content">
			<div class="wrapper">
			<article class="container_12">
