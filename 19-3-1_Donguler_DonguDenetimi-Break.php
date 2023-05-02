<?php
print("break döngüyü kırar");
print("<br>");
$sayac1=1;
while($sayac1<=10){
    if($sayac1==5)break;
    echo "-".$sayac1;
    $sayac1++;
}
print("<hr>");

$Dizi=range(0,100,3);
$E_Sayisi=count($Dizi);
$Sonuc=False;
$Aranan=99;
for($i=0;$i<$E_Sayisi;$i++){
    if($Dizi[$i]==$Aranan){
        echo "aranan değer bulundu $Aranan";
        $Sonuc=True;
        break;
    }
}
if($Sonuc==False){
echo "Aranan değer bulunamadı";
}
?>