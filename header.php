<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?= $pageTitle ?></title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
				<a href="index.php" class = "navbar-brand" id="logo">Shamrock Interactive</a>
				<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
				<div class = "collapse navbar-collapse navHeaderCollapse">
					<ul class = "nav navbar-nav navbar-right">
						<li class=<?php if ($pageTitle == "Home") { echo "active";}?>><a href = "index.php">Home</a></li>
						<li><a href = "blog/wordpress/">Blog</a></li>
						<li class =<?php if ($pageTitle == "What We Do") { echo "active";}?>><a href = "what_we_do.php">What We Do</a></li>
						<li><a href = "#">Our Work</a></li>						
						<li><a href = "#contact" data-toggle="modal">Contact Us</a></li>
					</ul>
				</div>
			</div>
		</div>