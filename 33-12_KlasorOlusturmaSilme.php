<?php 
echo "mkdir fonksiyonu ile dosya oluşturulur";echo "<br>";
echo "<br> Kullanım şekli : mkdir(dosya_adi,izinler) ";echo "<br>";
echo "<br> 0600 :sahibinden başkası okuyup yazamaz";echo "<br>";
echo "<br> 0644 :sahibinden başkası sadece okur";echo "<br>";
echo "<br> 0777 :herhes herşeyi yapar";echo "<br>";
echo "<br> 0755 :sahibi okur,yazar,çalıştırır diğerleri okur ve çalıştırır";echo "<br>";
echo "<br> 0750 :sahibiyle aynı grupta olanlar okur ve çalıştırır diğerleri bişey yapamaz";echo "<br>";
mkdir("denemeklasoru",755);
echo "denemeklasoru olusturuldu";
echo "<br> rmdir(dosya_adi) fonksiyonu ile dosyalar silinebilir";
rmdir("denemeklasoru");
echo "denemeklasoru silindi";

?>