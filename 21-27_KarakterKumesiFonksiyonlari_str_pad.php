<?php
print("fonksiyonu bir bilgi belirli uzunlukta başka bilgiyle doldurmak için kullanılır.");
print("str_pad(bilgi,uzunluk,dolgu_karakteri,dolgu_türü)");
print("bu işlev bilgi değerinin solunu sağını veya her iki tarafını belirtilen dolgu_karakteri ile uzunluk kadar doldurarak donucu döndürür
eğer seçimlikdolgu karakteri belirtilmezse dolgu işlemi boşluk karakterleriyle yapılır seçimlikdolgu türü olarak str_pad_right,str_pad_left
veya str_pad_both sabiti her iki taraf belirlenebilir.dolgu_türü belirtilmezse str_pad_right değeri öntanımlıdır.");

 print("<br>");
$input="Armut";
echo str_pad($input,10);print("<br>");
echo str_pad($input,20,"*",STR_PAD_LEFT);print("<br>");
echo str_pad($input,20,"*",STR_PAD_RIGHT);print("<br>");
echo str_pad($input,20,"*",STR_PAD_BOTH);print("<br>");
?>