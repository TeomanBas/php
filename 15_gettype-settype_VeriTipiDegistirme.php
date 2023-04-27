<?php
print("integer :"." TAMSAYI");
print "<br>";
print("double :"." ONDALIKLI SAYI");
print "<br>";
print("string :"." METİN");
print "<br>";
print("array :"." DİZİ");
print "<br>";
print("object :"." NESNE TÜRÜNDE DEĞİŞKEN");
print "<br>";
print("class :"." SINIF TÜRÜNDE DEĞİŞKEN");
print "<br>";
print("unknown  type :"." DEĞİŞKEN TİPİ BİLİNMİYOR");
print "<hr>";
$sayi=12;
$ondalik=12.999;
$metin="metin";
$bool=true;

print "<h3>gettype</h3>";


echo "sayı :".$sayi." ".gettype($sayi);
print "<hr>";
echo "ondalık :".$ondalik." ".gettype($ondalik);
print "<hr>";
echo "metin :".$metin." ".gettype($metin);
print "<hr>";
echo "boolean (true 1 ,false 0 değeri) :"." ".gettype($bool);
print "<hr>";

print "<br>";
print "<br>";
print "<br>";
print "<h3>settype</h3>";

$Deger=15.1234;
settype($Deger,'string');
echo "string :".$Deger;
print "<hr>";
$Deger=15.1234;
settype($Deger,'integer');
echo "integer :".$Deger;
print "<hr>";
$Deger=15.1234;
settype($Deger,'double');
echo "double :".$Deger;
print "<hr>";
$Deger=15.1234;
settype($Deger,'boolean');
echo "boolean :".$Deger;


?>