<?php
$vt = new mysqli('localhost', 'root', '', 'websitesi');
// Bağlantı kuruldu mu kontrol edelim...
if (!$vt)
  {
  die("Bağlantı Hatası: " . mysqli_connect_error());
  }
// Karakter kodu ayarlaması yapalım...
if (!$vt->set_charset("utf8")) {
    echo "Karakter kodu ayarlaması başarılı olmadı!";
    echo $vt->error;
  }
?>
