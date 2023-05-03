<?php 
print("Ltrim() left, Rtrim() right, trim() hem left hemde right anlamında baştaki sonraki boşlukları silmek
için kullanılır.eğer tek parametre kullanılırsa tüm boşlukar silinir ancak parametre olarak
bir karakter belirtilirse o karakterler silinebilir");
print("<br>");
print(' " " ASCII 32 (0x20), sıradan boşluk');print("<br>");
print(' \t ASCII 9 (0x09), sekme');print("<br>");
print(' \n ASCII 10 (0x0A), satırsonu');print("<br>");
print(' \r ASCII 13 (0x0D), satırbaşı');print("<br>");
print(' \0 ASCII 0 (0x00), NUL-bayt');print("<br>");
print(' \x0B ASCII 11 (0x0B), dikey sekme');print("<br>");
print("<hr>");
$d1 = "\t\t örnek bilgi ...   ";
$d2 = "\x09 örnek bilgi2\x0A";
$d3 = "Merhaba Dünya";
var_dump("$d1","$d2","$d3");
print("<br>");
$sonuc = ltrim($d1);
var_dump($sonuc);
$sonuc = ltrim($d3,"aerMyh");
var_dump($sonuc);
$sonuc = trim($d2,"\x00..\x1F");
var_dump($sonuc);





?>