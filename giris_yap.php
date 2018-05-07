<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		session_start();
		$_SESSION["yetki"] = false;
		include "vtbaglan.php";
		// Formdan aldığımız kullanıcı verilerini temizleyelim...
		$kullanici= $vt->real_escape_string($_POST['kadi']);
		// Parolayı sha1 ile şifreleyelim...
		$sifre= sha1($_POST['sifre']);
		// Şimdi veri tabanındaki bilgi ile karşılaştıralım...
		$sql = "SELECT * FROM kullanicilar WHERE kullaniciadi like '$kullanici' AND sifre like '$sifre'";

		if ($sonuc= $vt->query($sql)) 
		{ // Okurken hata oluşmadıysa
		  if ($sonuc->num_rows == 0) 
		  { // Aradığımız kayıt veri tabanında yok...
		    echo "Kullanici adı veya şifre hatalı! Henüz kayıt olmadıysanız lütfen kayıt olunuz!";
		  } 
		  else 
		  {
		    $satir = $sonuc->fetch_assoc();
		    $_SESSION["yetki"] = true;
		    $_SESSION["kullanici_id"]=$satir["k_id"];
		    $_SESSION["kullanici"] = $satir["kullaniciadi"];
		    $_SESSION["isim"] = $satir["k_adi"];
		    $_SESSION["soyad"] = $satir["k_soyadi"];
		    $_SESSION["eposta"] = $satir["k_mail"];
		    //header("Location: anasayfa.php");
		    header("Location: index.php");
		  }
		} 
		else 
		{ // Problem çıktıysa
		  echo "Sorgu çalıştırılamadı!";
		  echo $vt->error;
		}
		$vt->close();
	?>

</body>
</html>

