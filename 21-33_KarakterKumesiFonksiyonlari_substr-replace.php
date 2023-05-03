<?php 
$metin1="substr_replace() string bir ifade içerisinde değişiklik yapmak için kullanılır.";
echo  $metin1;
print("<br>");
$metin2="kullanım şeklide  : substr_replace(bilgi,yeni bilgi, başlangıç,uzunluk)";
echo $metin2;
print("<br>");
echo substr_replace($metin1,$metin2,-20,-10);
print("<br>");
echo substr_replace($metin1,$metin2,20,10);

?>