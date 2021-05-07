<?php
	/* Template Name: CONTACT */
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
</head>
<body>

<style type="text/css">
	textarea{
		margin: 12px;
	}

</style>

<div class="container text-center" style="font-family: Kristen ITC; font-size: 70px; padding-bottom: 30px;" >
	<h1>Questions and Inquiries</h1>
	<h1>Message Us</h1>
	<div class=" text-center">
		<img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/phone.png" alt="Logo" style="width:80px;">
		<img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/message.png" alt="Logo" style="width:80px;">
		<h3>0999-999-9999</h3>
	</div>
	<div>
		<img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/instac.png" alt="Logo" style="width:80px;">
		<img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/fbc.png" alt="Logo" style="width:80px;">
		<img src="http://localhost/Drip&PuffVapeShop/wp-content/uploads/2021/05/twitterc.png" alt="Logo" style="width:80px;">
	</div>
</div>

	<div class="container text-center" style="font-family: Kristen ITC; font-size: 20px; background-color: rgb(58,60,59); padding: 30px;">
		<form action="/action_page.php">
    <div class="row">
    	<div class="col">
        <input type="text" class="form-control" placeholder="Enter Name" name="name">
      </div>
      <div class="col">
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="row">
        <textarea type="text" class="form-control" id="message" placeholder="Message" name="message" rows="5"></textarea>
      </div>
    <button type="submit" class="btn btn-dark btn-sm" style="color: rgb(58,60,59);">Submit</button>
  </form>
  </div>

</body>
</html>

