<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	<div>
		<div style="margin:0px 250px 20px 250px; background-color: rgb(58,60,59);border: 5px solid; border-color: rgb(58,60,59); border-radius: 5px;  -webkit-box-shadow:inset 0px 0px 0px 4px mintcream;">

		  <h1 class="text-center" style="margin:0; padding: 0; color: mintcream; font-family: Curlz MT;
			font-size: 70px; letter-spacing: 0.7rem;">DRIP & PUFF</h1>
		</div>
			<a href="http://localhost/Drip&PuffVapeShop/cart/" >
	          <i class="fas fa-shopping-cart fa-2x" style="color: black; position: absolute; top: 12%; left: 80%; "></i>
	        </a>
			<a href="#" class="btn btn-dark btn-sm" style="font-family: Kristen ITC; position: absolute; top: 12%; left: 84%; color: rgb(58,60,59);">
	          <span class="glyphicon glyphicon-log-in"></span> Log in
	        </a>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center" style="font-family: Kristen ITC;font-size: 25px;"> 
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/home/">Home&nbsp;</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/product/">Product&nbsp;</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/shop/">Shop&nbsp;</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/contact/">Contact&nbsp;</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/about-us/">About Us&nbsp;</a>
		    </li>
		  </ul>
		  <form class="form-inline" action="/action_page.php" style="margin-left: 10%;">
		  	<button type="button" class="btn btn-dark btn-sm" style="color:rgb(58,60,59); font-family: Kristen ITC; margin-top: 20px; ">Search</button>&nbsp;
		    <input class="form-control form-control-lg" type="text" placeholder="Search" style="font-family: Kristen ITC; height: 30px; margin-top: 20px;">
		  </form>
	</nav>
</div>