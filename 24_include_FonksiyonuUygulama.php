<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Fonksiyonu</title>
</head>
<body>
<?php 
print("include fonksiyonu harici bir sayfayı sayfaya eklemek için kullanılır.require fonksiyonundan farkı eğer sayfa yüklenmezse
o satırdan sonraki işlemler devam eder ");
print("<br>");print("<br>");print("<br>");

if(isset($_GET['go'])){
    $linkler=array("anasayfa"=>"anasayfa.html",
                    "hakkimizda"=>"hakkimizda.html",
                    "iletisim"=>"iletisim.html",
                    "urun"=>"urunlerimiz.html",
                    "referans"=>"referans.html");
    include($linkler[$_GET["go"]]);
}
else{
    ?>
    <a href="24_include_FonksiyonuUygulama.php?go=anasayfa">Anasayfa</a></br>
    <a href="24_include_FonksiyonuUygulama.php?go=hakkimizda">Hakkımızda</a></br>
    <a href="24_include_FonksiyonuUygulama.php?go=iletisim">İletişim</a></br>
    <a href="24_include_FonksiyonuUygulama.php?go=urunlerimiz">Ürünlerimiz</a></br>
    <a href="24_include_FonksiyonuUygulama.php?go=referans">Referanslar</a></br>
    
    
 <?php
}
?>
</body>
</html>