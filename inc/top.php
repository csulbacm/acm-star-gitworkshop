<!doctype html>
<?php include("inc/func.php") ?>
<html>
	<head>
            <title>
                <?php 
                    if(isset($title)) {
                        echo "acm* workshop: " . $title;    
                    } else {
                        echo "acm* workshop";
                    }
                ?>
            </title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/960.css">
		<script src="js/live.js"></script>
	</head>
	<body>
		<header>
			<div id="heromast">
				<h1><a href="index.php">Git Workshop</a></h1>
				<h2><a href="index.php">Learn to manage your code</a></h2>
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
                    <li><a href="guide.php">Guide</a></li>
					<li><a href="drama.php">The Drama</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>
		</header>

		<div class="body-content">
			<div class="wrapper">
			<article class="container_12">
