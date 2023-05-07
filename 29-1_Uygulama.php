<?php 
// session oluşturduk ve session değişkeni olan isim içerisine $deger değişkenini attık.
session_start();
$deger="deneme";
$_SESSION["isim"]=$deger;

// session oluşturulup oluşturulmadığı kontrol ediliyor
if(isset($_SESSION["isim"])){
    print("session oluşturulmuş degeri : ".$_SESSION["isim"]." içerdiği eleman sayısı ".count($_SESSION));
    print("<br>");
}else{
    print("session oluşturulmamış");
    print("<br>");
}


print("SESSION TEMİZLENİYOR");
print("<br>");
session_destroy();


print("SESSION id tanımlaması yapıldı 123456 inspect elementlerden kontrol edilebilir");
print("<br>");
session_id($isim="123456");
session_start();

print("<br>");

?>