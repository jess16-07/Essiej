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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	<div style="margin:10px 250px; background-color: rgb(58,60,59);border: 5px solid; border-color: rgb(58,60,59); border-radius: 5px;  -webkit-box-shadow:inset 0px 0px 0px 4px mintcream;">

	  <h1 class="text-center" style="margin:0; padding: 0; color: mintcream; font-family: Curlz MT;
		font-size: 70px; letter-spacing: 0.5rem;">DRIP & PUFF</h1>
	</div>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center" style="font-family: Kristen ITC;font-size: 25px;"> 
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/home/">Home</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/contact/">Contact</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/about-us/">About Us</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="http://localhost/Drip&PuffVapeShop/shop/">Shop</a>
		    </li>
		  </ul>
		  <form class="form-inline nav justify-content-end" action="/action_page.php">
		    <input class="form-control form-control-lg mr-sm-2" type="text" placeholder="Search" style="margin-left: 200px; font-family: Kristen ITC;">
		    <button type="button" class="btn btn-dark btn-sm" style="color:rgb(58,60,59); font-family: Kristen ITC;">Search</button>
		  </form>
	</nav>
</div>