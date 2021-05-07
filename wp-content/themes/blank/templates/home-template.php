<?php
	/* Template Name: HOME */
	get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<style type="text/css">
	.carousel .carousel-indicators li {
	   	width: 10px;
		height: 10px;
		border-radius: 100%;
		position: relative;
		bottom: -350px;
}	.carousel-inner img{
		height: 450px;
}
</style>

<div class="container">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
  	<ul class="carousel-indicators li"></ul>
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/vape1.jpg" alt="Los Angeles" width="400" height="300">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/vape3.jpg" alt="Chicago" width="400" height="300">
    </div>
    <div class="carousel-item">
      <img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/vape4.jpg" alt="New York" width="400" height="300">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</body>
</html>