<?php
print("date fonksiyonu sunucudan zaman bilgisini almak için kullanılır getdate
fonksiyonundan farkı zaman bilgisini farklı formatlarda alınabilmesidir.");
print("<br>");print("<br>");
print("a : 12 saat esasına dayanır öğleden önce 'am' sonra 'pm' ekini alır");print("<br>");
print("A : 'am' ve 'pm' eklerinin büyük harfle yazılmasını sağlar ");print("<br>");
print("d : iki haneli gün sayısı");print("<br>");
print("D : üç haneli gün sayısı");print("<br>");
print("F : uzun ay adı");print("<br>");
print("h : 12 saatlik sistemde saat '01'-'12'");print("<br>");
print("H : 24 saatlilk sistemde saat '00'-'23'");print("<br>");
print("g : 12 saatlik sistemde tek haneli saatlerin önüne sıfır konmadan saat:'0'-'12'");print("<br>");
print("G : 24 saatlik sistemde tek haneli saatlerin önüne sıfır konmadan saat:'0'-'23'");print("<br>");
print("i : Dakika : 00-59");print("<br>");
print("j : Tek haneli sayıların önüne sıfır konmadan gün sayısı '1'-'31'");print("<br>");
print("l : (küçük l)Uzun gün adı Monday");print("<br>");
print("L : Artık yıl olup olmadığına ilişkin boolean değer döner artık yıl ise 1 değilse 0 döner ");print("<br>");
print("m : Tek haneli sayıların önüne sıfır konarak ay sayısı");print("<br>");
print("n : Tek haneli sayıların önüne sıfır konmadn ay sayısı");print("<br>");
print("M : Kısaltılmış ay adı 'jan'");print("<br>");
print("s : saniye '00'-'59'");print("<br>");
print("S : inlizce 'nci' anlamında 2 karakter 'th','nd' sıralama");print("<br>");
print("t : belitrilen ayın toplam gün sayısı '28'-'31'");print("<br>");
print("w : haftanın kaçıncı günü olduğu bilgisi : ' 0:' pazar ,' 1:' pazartesi");print("<br>");
print("Y : dört haneli yıl '2020'");print("<br>");
print("y : iki haneli yıl : '02'");print("<br>");
print("z : yılın kaçıncı günü olduğu bilgisi '0'-'365'");print("<br>");
print("<br>");
print("<hr>");
echo date("Fj,Y,g:i");print("<br>");
echo date("m.d.y");print("<br>");
echo date("j,n,Y");print("<br>");
echo date("Ymd");print("<br>");
echo date('h-i-s,j-m-y,it is w Day');print("<br>");
echo date('\i\t \i\s \t\h\e jS \d\a\y');print("<br>");
echo date("D M j G:i:s Y");print("<br>");
echo date('H:m:s \m \i\s \m\o\n\t\h');print("<br>");
echo date("H:i:s");print("<br>");

print("<br>");
print("<hr>");
print("istenirse date fonksiyonu iki parametre alacak şekilde de kullanılabilir örn mktime()");

?>