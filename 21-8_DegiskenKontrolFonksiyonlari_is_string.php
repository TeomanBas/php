<?php
print("is_string : bir değişkenin içerisindeki değer string ise true değilse false döner");print("<br>");
$a="abcd";
print("$a");print("<br>");
$s=is_string($a);
if($s==True){
    echo"değişken string"." değişken değeri : ".$s;
}else{
    echo "değişken string değil";
}
?>