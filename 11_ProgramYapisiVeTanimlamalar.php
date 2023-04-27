<?php
print "<h3>Program Yapısı ve Tanımlamalar</h3>";
print "Php kodları php etiketleri arasında olmalıdır. 
<b><code>&lt;?php ... ?&gt;</code></b> veya <b><code>&lt;? ... ?&gt;</code></b> olmalıdır.ancak ikinci kullanm pek yaygın değildir
 ve default kapalı durumda olabilir bunu açmak için php.ini dosyası içerisinde <b><ins>shorts_open_tag</ins></b> değeri ".'<b>"on"</b>'." olarak değiştirilmelidir.</pre> 
 php ile xml ve xhtml işlemeri yapılacaksa bu ".'"<b>off</b>"'." konumda olmalıdır";
print "<br>";
print "<br>";
print "Php kodları yazarken bazı durumlarda büyük küçük harf duyarlılığı vardır örn ".'"$eposta"'." ile ".'"$Eposta"'." aynı değildir";
print "<br>";
print "<br>";
print "Php kodları // veya # işaretleri ile bir satır tamamen yorum satırı yapılabilir birden fazla satır için /* ... */ şeklinde kullanılabilir ve kodlar * ların arasına yazılır";
print "<br>";
print "<br>";
print "Değer ataması yapılmayan veya herhangi bir yerde kullanılmayan değişkenler tanımsız değişken(undefined variable) hatası verebilir bunun için <b>php.ini</b> dosyasında bulunan".'"<b>error_reporting</b>"'." özelliği değiştirilebilir.";
print "<br>";
print "<br>";
print "değişkenler rakamla başlayamaz,aralarında _ işaretinden başka işaret olamaz ve değişken adlarında türkçe karakter kullanılamaz";
print "<br>";
print "<br>";
print "bir ifade yazdırılırken print veya echo kullanılabilir yazılan ifadeler tek tırnak içerisinde ise hepsi string bir ifade olarak algılanır
eğer ifadeler çift tırnak içerisinde ise içerisinde bulunan değişkenler ve php kodları yorumlanır.";
print "<br>";
print "<br>";
?>