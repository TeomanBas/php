<?php
print("is_float : bir değişkenin içerisindeki değer float ise true değilse false döner");print("<br>");
$a=1234.23;
print("$a");print("<br>");
$s=is_float($a);
if($s==True){
    echo"değişken float"." değişken değeri : ".$s;
}else{
    echo "değişken float değil";
}
?>