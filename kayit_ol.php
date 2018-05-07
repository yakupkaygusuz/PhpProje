<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		if($_POST["kayitolsifre"]!=$_POST["kayitolsifre_tekrar"])
		{
			echo "Şifreler uyuşmuyor";    
        }
		else
		{
			include "vtbaglan.php";
			$ad= $vt->real_escape_string($_POST["uyead"]);
			$soyad = $vt->real_escape_string($_POST["uyesoyad"]);
			$kullanici= $vt->real_escape_string($_POST["uyekadi"]);
			$sifre = sha1($_POST["kayitolsifre"]);
			$eposta= $vt->real_escape_string($_POST["emailkayitol"]);


			$sql = "INSERT INTO kullanicilar VALUES (NULL, '$ad', '$soyad', '$eposta', '$kullanici','$sifre')";
			$sonuc = $vt->query($sql);
			if ($vt->errno) {
				echo "Bir hata oluştu: $vt->error";
			} else {
				/*echo "Kaydınız başarıyla yapıldı.";
				echo "<br />";
				echo htmlentities($kullanici);*/
			}
			$vt->close();
			sleep(2);
			header("Location: giris_kayitol.php#tologin");
			exit();
		}
	 ?>

	 


</body>
</html>