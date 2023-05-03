<?php 
print("max() parametre olarak aldığı değerler içerisinden en büyük olan değeri bulur
min() parametre olarak aldığı değerler içerisinden en küçük olanı bulur.
değer olarak dizi değişkenleride verilebilir ancak max olarak belirlenen sayı dönmez dizi değişkeninin kendisi 
döner ");
print("<hr>");
print("max()");
print("<br>");
echo max(1,2,3,4,55,2,6,);
print("<br>");
echo max(array(3,4,6,1,2,3));
echo max("abc",10);
print("<br>");
echo max("abx",0);
print("<br>");
echo max(-11,"abcd");
print("<br>");
$val = max(array(3,5,7,2),array(22,55,11,77,2));
print_r($val);
print("<br>");
$val = max("abc",array(5,2,4,66,22));
print_r($val);
print("<br>");
print("<hr>");
print("min()");
print("<br>");
echo min(1,2,3,4,55,2,6,);
print("<br>");
echo min(array(3,4,6,1,2,3));
echo min("abc",10);
print("<br>");
echo min("abx",0);
print("<br>");
echo min(-11,"abcd");
print("<br>");
$val = min(array(3,5,7,2),array(22,55,11,77,2));
print_r($val);
print("<br>");
$val = min("abc",array(5,2,4,66,22));
print_r($val);
print("<br>");




?>    