<?php
$Dizi1=array("Araba","Bisiklet","Uçak","Tren",1,2,3,4,5,22,44,66,555);
$Dizi2=array(11,22,33,44,55,66,77);
foreach($Dizi1 as $Index1 => $Deger1){
        foreach($Dizi2 as $Index2 => $Deger2){
            if($Deger1==$Deger2){
                break;
            }
        }
        if($Deger1==$Deger2){
            continue;
        }
    print("indis : $Index1 deger : $Deger1");
    print("<br>");
}
?>