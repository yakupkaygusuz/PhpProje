<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HAKKIMIZDA - hatamnerede.com</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css_giris/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css_giris/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>

	<link rel="stylesheet" type="text/css" href="css/search.css"><!--Bu 3 style ve script dosyası searchbox için -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<?php

include "header.php";

?>
<div id="header">
		<a href="index.html" class="logo">
			<img src="images/icon.png" alt="">
		</a>
		<ul id="navigation">
			<li >
				<a href="index.php">ANASAYFA</a>
			</li>
			<li>
				<a href="yazilim.php">YAZILIM</a>
			</li>
			<li >
				<a href="sorular.php">SORULAR</a>
			</li>
			<li class="selected">
				<a href="hakkimizda.php">HAKKIMIZDA</a>
			</li>
		</ul>
	</div>

<div id="body">
		<h1><span>BİZE ULAŞIN</span></h1>
		<form action="contact.html">
			<input type="text" name="fname" id="fname" value="İSİM">
			<input type="text" name="address" id="address" value="ADRES">
			<input type="text" name="email" id="email" value="E-MAİL">
			<input type="text" name="phone" id="phone" value="TELEFON NUMARASI">
			<textarea name="message" id="message">MESAJ</textarea>
			<input type="submit" name="gonder" id="send" value="GÖNDER">
		</form>
	</div>

<?php include "footer.php" ?>