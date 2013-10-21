<!doctype html>
<?php include("inc/func.php") ?>
<html>
	<head>
            <title>
                <?php 
                    if(isset($title)) {
                        echo "acm* git workshop: " . $title;    
                    } else {
                        echo "acm* git workshop";
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
					<div class="grid_12">
						<h1><a href="index.php">Git in <br> &nbsp;the Habit</a></h1>
				<h2><a href="index.php">26th October 2013</a></h2>
					</div>
				</div>

				<nav>
					<div class="container_12">
							<ul class="grid_12">
							<li><a href="index.php">Home</a></li>
							<li><a href="signup.php">Workshop Sign-Up</a></li>
		                    <li><a href="prereq.php">Requirements</a></li>
		                    <li><a href="about.php">About</a></li>
						</ul>
					</div>				
				</nav>
			</div>
		</header>

		<div class="body-content">
			<div class="wrapper">
			<article class="container_12">
