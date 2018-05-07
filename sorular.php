<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SORULAR - hatamnerede.com</title>
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
			<li class="selected">
				<a href="sorular.php">SORULAR</a>
			</li>
			<li >
				<a href="hakkimizda.php">HAKKIMIZDA</a>
			</li>
		</ul>
	</div>

	<div id="body">
		<h1><span>SORULAR</span></h1>
		<div>
			<?php
					//session_start();
					//if (isset($_SESSION["yetki"]) AND $_SESSION["yetki"]) {

					    include "vtbaglan.php";
						$sql = "SELECT icerik.icerik_id, icerik.icerik_konusu, icerik.icerik_resim_url, icerik.icerik_yazi, icerik.yukleyen_id, icerik.kategori_id, kullanicilar.k_adi, kullanicilar.k_soyadi, kategori.kategori_adi  FROM icerik, kullanicilar, kategori WHERE kullanicilar.k_id = icerik.yukleyen_id AND icerik.kategori_id = kategori.kategori_id";
					    if ($sonuc = $vt->query($sql)) {
					    	if ($sonuc->num_rows > 0) {
					        echo "<ul>";
					    	    while($satir = $sonuc->fetch_assoc()) {
					            //var_dump($satir);
					            list($genislik, $yukseklik, $tip, $oz) = getimagesize($satir["icerik_resim_url"]);
					            //if ($genislik >100) {
					            //$oran = $genislik / 100;
					           // $genislik = $genislik/$oran;
					            //$yukseklik =  $yukseklik/$oran;
					            $genislik=376;
					            $yukseklik=300;
					            //}
								echo "<li>";
									echo "<a href='blog-single-post.html' class='figure'>";
									echo "<img src='".$satir["icerik_resim_url"]."' width='$genislik' height='$yukseklik' alt=''></img>";
									echo "</a>";
									echo "<div style='width:538px !important;'>";
										echo "<h3>";
										echo $satir["icerik_konusu"];
										echo "</h3>";
										echo "<p>";
										echo $satir["icerik_yazi"];
										echo "</p>";
										$kod = $satir["icerik_id"];
										echo "<a href='soru_icerik.php?kod=$kod' class='more'>GİT</a>";
										echo "</a>";
									echo "</div>";
								echo "</li>";
					          }
					          echo "</ul>";
					        } else {
					          echo "Gösterilecek resim mevcut değil!<br />";
					        }
					      } else {
					        echo "Sorguda bir hata oluştu". $vt->error;
					      }


					//} else {
					  //echo "yetkin yok, hadi giriş yap";
					//}
					?>
					
					<br />
					<a href="resimyukleform.php"> Resim yüklemek için buraya tıklayınız.</a>
			</ul>
		</div>
	</div>
	<?php include "footer.php" ?>

     