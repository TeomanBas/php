<?php 
print("explode() fonksiyonu bir karakter kümesini istenilen karaktere göre bölerek bir dizi içerisine yerleştirir
");print("<br>");
print("explode(ayırma_karakteri,ayrılacak_bilgi,sınır) sınır ifadesi eğer bölünecek karakterler sınırı aşıyorsa sınıra kadar
bölme gerçekleşir fazla kısım diznin son elemanına yerleştirilir.eğer negatif değer olursa dizinin sondan negatif değer kaç ise o kadar
karakteri diziye dahil edilmez");
print("<br>");
$veri="bu aralar hava hiç ısınmıyor ve güneş açmıyor";
$kelimeler=explode(" ",$veri,6);
print_r($kelimeler);
print("<br>");
$kelimeler=explode(" ",$veri,-1);
print_r($kelimeler);


?>