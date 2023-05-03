<?php
print("isset fonksiyonu eğer bir değişken tanımlanmışsa ve Null değer içermiyorsa true değilse false döndürür.
eğer birden fazla değer veriliyorsa ve tüm değerler null değer içeriyorsa true değeri döndürür.");
print("<br>");
$a=" ";
if (isset($a)==True){
    print("değişkenin içerisi dolu");
}else{
    print("değişkenin içerisi boş");
}


?>