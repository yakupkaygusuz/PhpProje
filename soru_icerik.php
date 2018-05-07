
<?php include "header.php" ?>

<?php

  
if (isset($_POST["yorumbtn"])) {
  include "vtbaglan.php";
  $yorum = $vt->real_escape_string($_POST["yorum"]);
  //$yorumyapan = $_SESSION["kullanici_id"];
  $yorumyapilan = $_REQUEST["kod"];
  $sql = "INSERT INTO yorum (k_id, icerik_id, yorum) VALUES ('29','$yorumyapilan','$yorum')";
  if (!($vt->query($sql))) {
    echo $vt->error;
  }
  $vt->close();
}
?>


<!doctype html>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Soru İçerik</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css_giris/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css_giris/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)">
	<script type="text/javascript" src="js/mobile.js"></script>

	<link rel="stylesheet" type="text/css" href="css/search.css"><!--Bu 3 style ve script dosyası searchbox için -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="js/mobile.js"></script>
</head>
<body>
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
			<li>
				<a href="sorular.php">SORULAR</a>
			</li>
			<li class="selected">
				<a href="hakkimizda.php">HAKKIMIZDA</a>
			</li>
		</ul>
	</div>
		<?php
				if (isset($_REQUEST["kod"]) AND is_numeric($_REQUEST["kod"]))
				{
				  $kod = $_GET["kod"];
				  include "vtbaglan.php";
				  $sql = "SELECT icerik.*, kullanicilar.k_adi, kullanicilar.k_soyadi, kategori.kategori_adi  FROM icerik, kullanicilar, kategori WHERE kullanicilar.k_id = icerik.yukleyen_id AND icerik.kategori_id = kategori.kategori_id AND icerik.icerik_id = $kod";
				  if ($sonuc = $vt->query($sql)) 
				  {
				  	if ($sonuc->num_rows > 0) 
				  	{
				      echo "<div id='body'>";
					  $satir = $sonuc->fetch_assoc();
				      //var_dump($satir);
				      list($genislik, $yukseklik, $tip, $oz) = getimagesize($satir["icerik_resim_url"]);
				      if ($genislik >780) 
				      {
				        $oran = $genislik / 780;
				        $genislik = $genislik/$oran;
				        $yukseklik =  $yukseklik/$oran;
				      }
				      echo "<h1><span>".htmlentities($satir["icerik_konusu"])."</span></h1>";
				      echo "<div>";
				      echo "<img src='".$satir["icerik_resim_url"]."' width='$genislik' height='$yukseklik''></img>";
				      echo "</div>";
				      echo "<div class='article'>
								<h4>".htmlentities($satir["k_adi"])." ".htmlentities($satir["k_soyadi"])."/".$satir["kategori_adi"]."</h4>
								<p>".htmlentities($satir["icerik_yazi"])."</p>
							</div>";
					  echo "<hr><br>";
				      echo "<h1><span>"."<b> Yorumlar </b>\r\n"."</span></h1>"."<br/><br/>";
				      $sql = "SELECT yorum.*, kullanicilar.k_adi, kullanicilar.k_soyadi from yorum, kullanicilar WHERE  icerik_id = $kod AND yorum.k_id = kullanicilar.k_id";
				      //echo $sql;
				      if ($sonuc = $vt->query($sql)) 
				      {
				        //var_dump($sonuc);
				        if ($sonuc->num_rows > 0) 
				        {
				          while ($satir = $sonuc->fetch_assoc()) 
				          {
				          	  echo "<center><table border='1px;'>";
				              echo "<tr><td> Üye Adı Soyadı </td><td>".htmlentities($satir["k_adi"])."</td></tr>\r\n";
				              echo "<tr><td> Zaman </td><td>".$satir["yorum_zamani"]."</td></tr>\r\n";
				              echo "<tr><td> Yorum </td><td>".htmlentities($satir["yorum"])."</td></tr>\r\n";
				              echo "</table></center>";
				          }
				        }  
				        else 
				        {
				          echo "<tr><td colspan='2'> Henüz gösterilecek bir yorum yok </td></tr>\r\n";
				        }
				        echo "</div>";
				        if (isset($_SESSION["yetki"]) AND $_SESSION["yetki"]) 
				        {
				?>
				    	<form action="" method="post">
				      		<textarea name="yorum"></textarea>
				      		<input type="hidden" name="kod" value="<?php echo $kod; ?>">
				      		<input type="submit" name="yorumbtn" value="Kaydet!">
				    	</form>
				<?php
				        } 
				        else 
				        {
				          echo "<center>Yorum yapmak için giriş yapmalısınız!<br/>
				          <a href='giris_kayitol.php#tologin'><div class='btn btn-info'>Giriş Yap</div></a></center>";
				        }
				      } 
				      else 
				      {
				        echo $vt->error;
				      }
				    } 
				    else 
				    { // o koda ait bir resim yoksa
				      echo ("<script LANGUAGE='JavaScript'>  window.alert('Böyle bir resim yok!');
				    		window.location.href='anasayfa.php'; </script>");
				    }
				  } 
				  else 
				  {
				    echo $vt->error;
				  }
				  $vt->close();
				} 
				else 
				{
				  echo ("<script LANGUAGE='JavaScript'>  window.alert('Yanlış yönlendirme, lütfen önce yorum yapacağınız resmi seçiniz!');
						window.location.href='anasayfa.php'; </script>");
				}
				?>
<?php include "footer.php"; ?>