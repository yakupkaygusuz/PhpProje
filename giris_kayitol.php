<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css_giris/style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    

</head>
<body>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

 <div class="container">
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="giris_yap.php" autocomplete="on" method="POST" name="girisyapformu"> 
                                <h1>Giriş Yap</h1>
                                <p> 
                                    <label for="username" class="uname" >Kullanıcı Adı:</label>
                                    <input id="username" name="kadi" required="required" type="text" placeholder="Örnek: can10"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd">Şifre:</label>
                                    <input id="password" name="sifre" required="required" type="password" placeholder="Örnek: X8df!90EO" minlength="6"/> 
                                </p>
								<p class="signin button">
									<a href="#" style="float:left; margin-top:15px;" ">Şifremi unuttum.</a> 
									<input type="submit" value="Giriş Yap"/> 
								</p>

                                <p class="change_link">
									Henüz üye değil misiniz?
									<a href="#toregister" class="to_register">Üye ol!</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="kayit_ol.php" autocomplete="on" method="POST" name="kayitolformu" onsubmit="kontrol()"> 
                                <h1>Kayıt Ol</h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" >Ad:</label>
                                    <input id="uyead" name="uyead" required="required" type="text" placeholder="Örnek: Kübra" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" >Soyad:</label>
                                    <input id="uyesoyad" name="uyesoyad" required="required" type="text" placeholder="Örnek: Keskin" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"  > E-Mail:</label>
                                    <input id="emailkayitol" name="emailkayitol" required="required" type="email" placeholder="benimmailim@gmail.com"/> 
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" >Kullanıcı Ad:</label>
                                    <input id="uyekadi" name="uyekadi" required="required" type="text" placeholder="Örnek: Keskin123" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Şifre:</label>
                                    <input id="kayitolsifre" name="kayitolsifre" required="required" type="password" placeholder="Örnek: X8df!90EO" minlength="6" />
                                    <b class="sifre1"></b>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>6 Karakter<br>
                                        <span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>Büyük Harf<br>
                                        <span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>Küçük Harf<br>
                                        <span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>Rakam veya Sayı<br>
                                    </div>
                                </div>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Şifre Tekrar:</label>
                                    <input id="kayitolsifre_tekrar" name="kayitolsifre_tekrar" required="required" type="password" placeholder="Örnek: X8df!90EO" minlength="6" />
                                    <b class="sifre2"></b>
                                    <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>Şifre tekrar<br>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Üye Ol" id="buton" /> 
								</p>
                                <p class="change_link">  
									Zaten üye misiniz?
									<a href="#tologin" class="to_register"> Giriş Yap</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>


<script type="text/javascript" src="js_giris/kontroller.js"></script>
<script type="text/javascript" src="js_giris/ozel.js"></script>
</body>
</html>