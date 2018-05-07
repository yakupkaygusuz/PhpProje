
<?php session_start();
if($_SESSION["yetki"]==false){
	header("Location: giris_kayitol.php#tologin");
	}
?>
<form enctype="multipart/form-data" action="yukle.php" method="POST">
  Yükleyeceğiniz resim için: <br/>
  Lütfen bir başlık giriniz: <input type="text" name="baslik" required><br />
<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
Yüklemek için bir dosya seçiniz (Maksimum 100.000Bayt):
<input name="yuklenenDosya" type="file"><br/>
Lütfen detay giriniz: <br />
<textarea name="detay"> </textarea>
<input type="submit" value=Yükle>
</form>
