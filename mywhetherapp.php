<!DOCTYPE html>
<html>
<head>
	<?php include 'includes/heads.php';?>
	<link rel="stylesheet" type="text/css" href="styles/portfolioitem.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

	<?php include 'includes/header.php';?>

  	<div class="main-head">
		<a href="index.php"><img class="selectDisable" draggable="false" alt="Akshat Jain's photo" src="images/photo_150x150.png" />Akshat Jain</a> <span> - Portfolio</span>
	</div>

	<div class="main-divider"></div>

	<div class="container project-head">
		<h2> My Whether App </h2>
	</div>

	<div class="container project-dec-block">
		<h5> About the Project : </h5>
		<p> My Whether App is a whether application that uses the OpenWhetherMap API to fetch the real time whether details of any place in the world. User can also see 5 day forecast of the same place. The Search field for different places is powered by Google Maps Places API, that sends the query each time user types in the search field and suggests places according to it. </p>
	</div>

	<div class="container project-dec-block">
		<h5> My Responsibilies : </h5>
		<p> I was the sole developer in this project. This Project is based on MEAN Stack and I handeled both the backend and frontend part. </p>
	</div>

	<div class="container project-dec-block">
		<h5> Technologies Used : </h5>
		<p> HTML5, CSS3, Javascript, AngularJS, Node.JS, Express </p>
	</div>

	<div class="container project-dec-block">
		<a href="http://mywhetherappfinal.herokuapp.com/"><h5><b> Project Link </b></h5></a>
	</div>

	<div class="container project-image">
		<img src="images/mywhetherapp.png" alt="" />
	</div>

	<div class="portfolio-links">

		<a href="javascript:history.back()"><span class="link-back">Back</span></a>

	</div>

	<br /><br />

  	<?php include 'includes/footer.php';?>

</body>

<?php include 'includes/script_imports.php';?>

</html>
