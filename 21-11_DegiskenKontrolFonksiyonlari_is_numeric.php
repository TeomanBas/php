<?php
print("is_numeric : bir değişkenin içerisindeki değer numeric ise true değilse false döner");print("<br>");
$a="1234";
print("$a");print("<br>");
$s=is_numeric($a);
if($s==True){
    echo"değişken numeric"." değişken değeri : ".$s;
}else{
    echo "değişken numeric değil";
}
?>