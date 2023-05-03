<?php
print("strval : parametre olarak girilen değerleri string(karakter kümesi) türüne çevirir");
print("<br>");
print("intval : fonksiyonu parametre olarak verilen değerin istenilen tabanda 
tam sayı karşılığını verir.parametre olarak kullanıcak değeri ve tabanı alır eğer taban değeri
girilmezse tabanı 10 olarak alır.dönüşümü yapılacak değer string olmadıkça taban parametresinin bir etkisi olmaycaktır.");
print("floatval : girilen değeri float türüne çevirir.");

print("<br>");print("<hr>");
print("strval ornek");print("<br>");
$a=1234;
$b=strval($a);
print($a);print("<br>");
print(is_string($b)==True ?  "string değişken ":"string değil");print("<br>");

print("<br>");print("<hr>");
print("intval ornek");print("<br>");
echo intval(41);print("<br>");
echo intval(4.1);print("<br>");
echo intval('4.1');print("<br>");
echo intval('+41');print("<br>");
echo intval('-41');print("<br>");
echo intval('041');print("<br>");
echo intval(041);print("<br>");
echo intval(1e10);print("<br>");
echo intval('1e10');print("<br>");
echo intval(0x1A);print("<br>");
echo intval(42000000);print("<br>");
echo intval(42000000000000000000);print("<br>");
echo intval('42000000000000000000');print("<br>");
echo intval(42000000000000000000000);print("<br>");
echo intval(42,8);print("<br>");
echo intval(42, 8);print("<br>");

print("<br>");print("<hr>");
print("floatval-doubleval ornek");print("<br>");
$a='123.42345234abv';
print(floatval('123.42345234abv'));










?>