<?php 
echo "web sayfalarının bulunduğu dizinlerde dizini okuma ve dizne yazma işlemleri yapılabilir
bunun için web sunucu dizininin yazma ve okuma izninin olması gerekmektedir.";
echo "<br>";
echo "opendir fonksiyonu dizin açılır, readdir fonksiyonu dizinin içeriği listelenebilir";

$dizin_adi="./";
$dizin=opendir($dizin_adi);
while(gettype($bilgi=readdir($dizin))!="boolean"){
    if(is_dir("$dizin_adi/$bilgi"))
    print("--dizin--");
    print("<a href=\".$dizin_adi/$bilgi\">$bilgi</a><br>");
}

?>