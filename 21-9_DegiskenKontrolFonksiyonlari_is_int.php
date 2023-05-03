<?php
print("is_int : bir değişkenin içerisindeki değer int ise true değilse false döner");print("<br>");
$a=1234;
print("$a");print("<br>");
$s=is_int($a);
if($s==True){
    echo"değişken int"." değişken değeri : ".$s;
}else{
    echo "değişken int değil";
}
?>