<?php 
date_default_timezone_set("Asia/Istanbul");
$dosya=fopen("kayit.txt","a+");
// ziyaretçinin ip adresi
$IP_Adres=$_SERVER['REMOTE_ADDR'];
// ziyaretçinin Tarayıcı
$Tarayici=$_SERVER['HTTP_USER_AGENT'];
// zaman değişkeni
$TarihZaman=time();
$Bilgi=$IP_Adres."\t".$Tarayici."\t".$TarihZaman."\n";
print('İP adresiniz : <b>');
print($IP_Adres."</b><br>Tarayıcınız:<b>");
print($Tarayici."<b><br>");
print date("H:i:s -d/M/y",time());
print("<br>");
fwrite($dosya,$Bilgi,strlen($Bilgi));
while($okunan=fgets($dosya,1000)){
    print($okunan."<br>");
}
?>