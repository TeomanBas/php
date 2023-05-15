<?php 
// gd kütüphanesini kullanabilmek için php.ini içerisinde 
// ;extension=gd satırı bulunmalı ve başındaki ; işareti kaldırılmalıdır

// aşağıda hangi image typlarının desteklendiği görülebilir.
if(imagetypes() & IMG_PNG) echo "png desteği var";
else echo "png desteği yok";
echo "<br>";
if(imagetypes() & IMG_JPG) echo "jpg desteği var";
else echo "jpg desteği yok";
echo "<br>";
if(imagetypes() & IMG_WBMP) echo "WBMP desteği var";
else echo "WBMP desteği yok";
echo "<br>";
if(imagetypes() & IMG_GIF) echo "GIF desteği var";
else echo "GIF desteği yok";
echo "<br>";
echo "<br>";
?>
<pre>
<?php
// kurulu olan kütüphane sürümü hakkında bilgi almak için kullanılır
print_r(gd_info());
?>
</pre>
<?php
echo "grafik oluşturmaya başlarken ilk olarak bu sayfanın grafik olarak kullanılacağı 
header('Content-type:image/jpeg') fonksiyonu yardımıyla belirtilmesi gerekir.";







?>