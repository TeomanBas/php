<?php
print('number_format () parametre olarak verilen değişkeni binlik bölümlere ayırır.
bu fonksiyon bir,iki veya dört parametre alır');
print("<br>");
print('number_format(deger,ondalık_hane,ondalık_ayraç,binlik_ayraç)');
print("<br>");
$deger=1234.5678;
print("<br>");
number_format($deger,3,'? ','% ');
print("<br>");
$x=number_format($deger,3,' ? ',' % ');
$y=number_format($deger,3,'.','');
print($x);
print("<br>");
print($y);
?>