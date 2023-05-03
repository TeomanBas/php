<?php
print("is_array :değişken array bir dizi tutuyor ise true değilse false döner");print("<br>");
$a=array();
print_r($a);print("<br>");
$s=is_array($a);
if($s==True){
    echo"değişken dizi değişkeni"." değişken değeri : ".$s;
}else{
    echo "değişken dizi değişkeni değil";
}
?>