<?php
print("mktime fonksiyonu o anki sunucunun zaman değerini integer olarak döndürür.time fonksiyonuna göre
kullanımı daha avantajlıdır time fonksiyonunda hesaplama saniye cinsinden yapılır mktime da ise 
istenen türe göre hesaplama yapılır.
");print("<br>");
print('mktime(saat,dakika,saniye,ay,gün,yıl,ysu)');
print("<br>");
print('kullanılan parametreler içerisine fonksiyonda alabilir örn date fonksiyonu kullanılırsa date("m") sunucunun o anki zaman bilgisi veya
date("m")+5 5 ay sonraki zaman bilgiside alınabilir
');print("<br>");
print("ysu : yaz saati uygulaması anlamına gelir eğer yaz saati uygulanıyorsa 1 uygulanmıyorsa 0 yazılabilir yada bilinmiyorsa -1 yazılabilir eğer yanlış ayarlanırsa
saat 2 iken saat 3 e kadar olan aralıkta geçersiz zaman hatası verecektir.");
print("<br>");
print("bundan 10 gün 5 ay  4 yıl önceki tarih :");
print(date("d-m-Y",mktime(0,0,0,date("m")-5,date("d")-10,date("Y")-4)));
print("<br>");
print("mktime döndürdüğü değer: ".mktime(0,0,0,date("m")-5,date("d")-10,date("Y")-4));

?>