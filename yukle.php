<?php
session_start();
echo "<pre>";
var_dump($_POST);
var_dump($_FILES);
echo $_FILES["yuklenenDosya"]["error"];
var_dump($_SESSION);
echo "</pre>";

if($_SESSION["yetki"]==true){
	if(!$_FILES["yuklenenDosya"]["error"])
	{
		if (($_FILES["yuklenenDosya"]["type"]=='image/jpeg') OR ($_FILES["yuklenenDosya"]["type"]=='image/gif') OR ($_FILES["yuklenenDosya"]["type"]=='image/png')) {
			$hedefKlasor = "resimlisorunlar/";
			$hedefKlasor = $hedefKlasor.$_SESSION["kod"].time().basename($_FILES['yuklenenDosya']['name']);
			//basename ile sadece dosyanın ismi alınıyor.
			if (move_uploaded_file($_FILES["yuklenenDosya"]['tmp_name'], $hedefKlasor))
			{
				echo basename( $_FILES['yuklenenDosya']['name'])." ismindeki dosya başarı ile yüklendi.";
				include "vtbaglan.php";
				// Formdan gelen kullanıcı verilerini temizleyelim...
				$baslik= $vt->real_escape_string($_POST["baslik"]);
				$ekleyen = $_SESSION["kod"];
				if (isset($_POST["detay"])) {
					$detay = $vt->real_escape_string($_POST["detay"]);
					$sql = "INSERT INTO icerik VALUES (NULL, '$baslik', '$hedefKlasor', '$detay', '$ekleyen', 1)";
					// Şimdilik kategoriyi ilave etmediğimizden 1 gireceğiz, kategoriyi düzenleyince burası da düzenlenecek...
				} else {
					$sql = "INSERT INTO icerik VALUES (NULL,'$baslik','$hedefKlasor',NULL,'$ekleyen', 1)";
				}
				if ($sonuc = $vt->query($sql)) {
					echo ("<script LANGUAGE='JavaScript'>  window.alert('Yükleme başarılı...');
						window.location.href='anasayfa.php'; </script>");
				} else {
					echo "Yüklerken bir hata oluştu: $vt->error";
				}
			}else{
				echo "Bir hata oluştu!";
			}
		}
	}
}
else
{
	header("Location: giris_kayitol.php#tologin");
}
?>
