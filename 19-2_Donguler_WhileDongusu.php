<?php
print("while döngüsü koşul gerçekleştiği sürece içerisindeki işleri yürütür");
print("<br>");
print("while(koşul){");
print("<br>");
print("Gerçekleşecek işlemler");
print("<br>");
print("}");
print("<br>");

$a=10;
while($a<=100 AND ($a%7!=0 or $a%3!=0)){
    print("$a bölünemez <br>");
    $a++;
}print ("$a bölünür");
?>