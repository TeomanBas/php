<?php
print("getdate fonksiyonu zamanla ilgili bilgiyi bir dizi değişken, içerisinde tutar içerisindeki zamanla ilgili
değerler sunucuya ait bilgileri tutar");print("<br>");
print("seconds : saniye ");print("<br>");
print("minutes: dakika");print("<br>");
print("hours : saat");print("<br>");
print("mday : ayın kaçıncı günü olduğu (1,2,3)");print("<br>");
print("wday : haftanın kaçıncı günü olduğu");print("<br>");
print("mon : yılın kaçıncı ayı olduğu");print("<br>");
print("year : yıl bilgisi");print("<br>");
print("yday : yılın kaçıncı günü");print("<br>");
print("weekday : haftanın kaçıncı günü olduğu bilgisi (sunday,monday,...");print("<br>");
print("month : yılın hangi ayı olduğu bilgisi (january, february, ...");print("<br>");
print("<br>");print("<hr>");
$zaman=getdate();
echo ("saniye kaç ? :".$zaman["seconds"]);print("<br>");
echo ("dakika kaç ? :".$zaman["minutes"]);print("<br>");
echo ("saat kaç ? :".$zaman["hours"]);print("<br>");
echo ("ayın kaçıncı günü ? :".$zaman["mday"]);print("<br>");
echo ("haftafanın kaçıncı günü ? :".$zaman["wday"]);print("<br>");
echo ("yılın kaçıncı ayı ? :".$zaman["mon"]);print("<br>");
echo ("hangi yıl ? :".$zaman["year"]);print("<br>");
echo ("yılın kaçıncı günü ? :".$zaman["yday"]);print("<br>");
echo ("günlerden ne ?  :".$zaman["weekday"]);print("<br>");
echo ("aylardan ne ? :".$zaman["month"]);print("<br>");









?>