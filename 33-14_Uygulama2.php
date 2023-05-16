<?php 
$dosya=fopen("kayit.txt","r");
while($Deger=fgets($dosya,1000)){
    print($Deger."<br>");
}

?>