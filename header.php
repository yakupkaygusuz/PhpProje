<!--<!doctype html>-->
<!-- Website Template by freewebsitetemplates.com -->
<!--<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HAKKIMIZDA - hatamnerede.com</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css_giris/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css_giris/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>

	<link rel="stylesheet" type="text/css" href="css/search.css">Bu 3 style ve script dosyası searchbox için 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/mobile.js"></script><img src='images/exit.png'>


</head>-->
<body>
	<?php
	session_start();
		if (isset($_SESSION["yetki"])) {
		    echo "<div class='topnav'>";
	  			echo "<div class='search-container'>";
	    		echo "<form action='/action_page.php'>";
	      			echo "<input type='text' placeholder='Search..' name='search'>";
	      			echo "<button type='submit'><i class='fa fa-search'></i></button>";
	    		echo "</form>";
	  			echo "</div><br>";
	  			echo "<div id='header1'>";
					echo "<div style='float:right;'>";
						echo "<a href='#' class='more'>";
						echo "$_SESSION[kullanici]";
						echo "</a>";
						echo "<a href='cikis.php' style='margin-top:18px;'><img src='images/exit2.png'></img></a>";
						//echo "ÇIKIŞ YAP";
						echo "</a>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}
		else
		{
			echo "<div class='topnav'>";
	  			echo "<div class='search-container'>";
	    		echo "<form action='/action_page.php'>";
	      			echo "<input type='text' placeholder='Search..'' name='search'>";
	      			echo "<button type='submit'><i class='fa fa-search'></i></button>";
	    		echo "</form>";
	  			echo "</div><br>";
	  			echo "<div id='header1'>";
					echo "<div style='float:right;'>";
						echo "<a href='giris_kayitol.php#tologin' class='more'>GİRİŞ YAP</a>";
						echo "<a href='giris_kayitol.php#toregister' class='more'>KAYIT OL</a>";
					echo "</div>";
				echo "</div>";
			echo "</div>";
		}

	?>
	<!--<div id="header">
		<a href="index.html" class="logo">
			<img src="images/icon.png" alt="">
		</a>
		<ul id="navigation">
			<li >
				<a href="index_girisyapilmamis.php">ANASAYFA</a>
			</li>
			<li>
				<a href="yazilim.php">YAZILIM</a>
			</li>
			<li>
				<a href="sorular.php">SORULAR</a>
			</li>
			<li class="selected">
				<a href="hakkimizda.php">HAKKIMIZDA</a>
			</li>
		</ul>
	</div>-->