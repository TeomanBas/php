<?php 
require("30_1-NypAraba.php");

$araba1 = new Araba("mavi","tesla","2020","150","1000g","12345");
$araba1->Degerler("Renk"); echo "<br>";
$araba1->Degerler("Marka"); echo "<br>";
$araba1->Degerler("Model"); echo "<br>";
$araba1->Degerler("Hiz"); echo "<br>";
$araba1->Degerler("Guc"); echo "<br>";
echo "<hr>";
$araba2 = new Araba("pembe","passat","2023","20","1200g","1234asdf");
// SaseNo private olduğu için burada çağırırsak hata verecektir.
//$araba2->SaseNo;
print $araba2->Marka;
echo "<hr>";
$araba1->calis();
echo "<br>";
$araba2->dur();
echo "<hr>";
?>