<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #f3f3f3;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	#container {
		max-width: 500px;
		margin: 0 auto;
		border: 1px solid #ddd;
		box-shadow: 0 0 8px #ddd;
	}

	#container #form p {
		text-align: center;
	}

	#container #form #contact .input-container input {
		float: right;
		padding: 5px 0;
	}

	#container #form #contact .input-container, #container #form p{
	    width: 305px;
	    display: block;
	    margin: 0 auto;
	    padding-top: 20px;
	}

	#container #form #contact .submit-button {
		width: 100px;
		margin: 0 auto;
	}

	#container #form #contact .submit-button #submit{
		margin-top: 20px;
	    padding: 10px 30px;
	    background: #ddd;
	    border: 1px solid #7b7b7b;
	}

	#container #form #contact .submit-button #submit:hover{
		color: #fff;
	    background: #7b7b7b;
	}

	</style>
</head>
<body>
	<div id="container">
		<h1>Login</h1>

		<div id="form">
			<form id="contact" method="post" action="">  
				<div class="input-container">
					<label for="username">UserName</label>
					<input type="text" name="username" class="required">
				</div>
				<div class="input-container">
					<label for="pass">Password</label>
					<input type="password" name="pass" class="required">
				</div>
				<div class="submit-button"><input type="submit" name="submit" id="submit" value="Acceder" /></div>
			</form>
			<p>No tienes cuenta? <a href="<?= base_url() ?>register" class="registro">Registrate aqui</a></p>
		</div>
	</div>
</body>
</html>