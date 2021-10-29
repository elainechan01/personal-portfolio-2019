<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:wght@900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Message Received</title>
	<style type="text/css">
	.container-fluid{
	    width: 100%;
	    height: 100vh;
		position: absolute;
		top:0;
		left:0;
		text-align: center;
		padding: 15%;
		background: rgb(236,165,197);
		background: linear-gradient(45deg, rgba(236,165,197,1) 0%, rgba(11,7,66,1) 100%);
	}
	h1{
		font-size: 3em;
		font-family: 'Playfair Display', serif;
		color: white;
		opacity: 0.8;
	}
	button{
		background: white;
		padding: 20px 48px;
		border-radius: 4px;
		opacity: 0.5;
		transition: opacity 1s ease;
		font-family: "Open Sans", sans-serif;
	}
	a{
		text-decoration: none;
		color: rgba(11,7,66,1);
		font-size: 1.5em;
	}
	a:hover{
	    text-decoration: none;
	    color: rgba(11,7,66,1);
	}
	button:hover{
		opacity: 1;
	}
</style>
</head>

<body>
	<?php
	$name = $_POST["name"];
	$visitor_email = $_POST["email"];
	$message = $_POST["message"];

	$email_from = 'mailing4website@gmail.com';
	$email_subject = "Portfolio contact me";
	$email_body = "Name: ".$name."\n"."Email: ".$visitor_email."\n"."Message: ".$message;

	$email_to = 'mailing4website@gmail.com';

	$headers = "From: mailing4website@gmail.com"."\r\n".
				"MIME-Version: 1.0"."\r\n".
				"Content-Type: text/html; charset=utf-8";

	mail($email_to, $email_subject, $email_body, $headers);
	?>
	<div class="container-fluid">
	<h1><?php 
		echo "Thank you, ".$name." for contacting me. I will get back to you as soon as possible!";
	?></h1>
	<button><a href="index.php">Return to homepage</a></button>
	</div>
</body>
</html>