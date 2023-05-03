<?php
print("fonksiyonu bir bilgi içerisinde istenilen değerleri değiştirmek için kullanılmaktadır.");
$bilgi="asşidfocvbjöknrüpeçwüröınşbvı";
$sesli=array("ş","ü","ç","ö","ü","ı");
$etiket= str_replace("%body%","black","< body text='%body%' >");print("<br>");
echo $etiket;
echo str_replace($sesli,"",$bilgi,);
?>