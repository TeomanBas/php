<?php 
print("dosya içerisine bilgi ekleme iki şekilde gerçekleşmektedir bunlardan ilki tüm bilgileri silip yeni dosya oluşturma diğeri de mevcut dosyaya bilgi ekleme şeklindedir
Dosya içerisine bilgli yazarken dosyanın açılış parametresine dikkat edilmelidir. var olan bir dosya içerisine bilgi eklenecekse a parametresi, 
dosya yoksa veya içerisindeki bilgiler silinip yeniden yazılacaksa w parametresi kullanılmaktadır.");echo "<br>";
echo "<br>";
echo "dosya varsa içeriğini temizler yoksa yenisini oluşturur";echo "<br>";
print('$dosya = fopen("deneme.txt","a") or die ("dosya açılamıyor")');echo "<br>";
echo "<br>";
echo "bilgi ekleme modunda açar";echo "<br>";
echo '$dosya = fopen("deneme.txt","a") or die ("dosya açılamıyor")';echo "<br>";
echo 'diğer bir ifade ile w parametresi ile dosya başından,  a paramtresi ise dosya sonundan yazma işlemi yapılır';echo "<br>";
echo 'dosya içerisine bilgi yazmak için fwrite() ve fputs() fonksiyonları kullanılır.';echo "<br>";
echo "<hr>";
include("33-8_fwrite-fputs.php");
?>