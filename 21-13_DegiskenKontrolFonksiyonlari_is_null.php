<?php
print("is_null : bir değişkenin içerisindeki değer null ise true değilse false döner");print("<br>");
$a=Null;
print("$a");print("<br>");
$s=is_string($a);
if($s==Null){
    echo"değişken null"." değişken değeri : ".$s;
}else{
    echo "değişken null değil";
}
?>