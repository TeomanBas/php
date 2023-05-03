<?php 
print("round() parametre olarak verilen değerin ondalık kısmı 0.5 e eşit yada büyükse yukarı yuvarlar
değilse aşağıya yuvarlar. parametre olarak yuvarlanacak ondalık basamak sayısı belirlenebilir.");
print("<br>");
$a=12.5;
$b=12.111;
$c=12.987654321;
print($a." => ".round($a));
print("<br>");
print($b." => ".round($b));
print("<br>");
print($c." => ".round($c,4));
?>    