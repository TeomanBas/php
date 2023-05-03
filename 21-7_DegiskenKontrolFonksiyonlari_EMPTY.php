<?php
print("empty fonksiyonu isset fonksiyonunun tam tersidir.");print("<br>");
$a="hello";
print($a);print("<br>");
unset($a);
$x=empty($a);
if ($x==True){
    print("değişkenin içerisi boş "."empty değeri : ".$x);
}else{
    print("değişken tanımlı "."$x");
}
?>