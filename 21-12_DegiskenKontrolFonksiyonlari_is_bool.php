<?php
print("is_bool : bir değişkenin içerisindeki değer bool ise true değilse false döner");print("<br>");
$a=True;
print("$a");print("<br>");
$s=is_bool($a);
if($s==True){
    echo"değişken boolean "." değişken değeri : ".$s;
}else{
    echo "değişken boolean değil";
}
?>