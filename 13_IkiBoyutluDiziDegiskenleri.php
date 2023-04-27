<?php
$araba ['Tesla'] ['renk'] = "kırmızı";
$araba ['Tesla'] ['model'] = "2023";
$araba ['BMW'] ['renk'] = "siyah";
$araba ['BMW'] ['model'] = "2020";
print_r($araba);
print "<hr>";
print_r($araba['Tesla']);
print "<hr>";
print_r($araba['BMW']);
$YeniArabalar ['renk'] = "mor";
$araba ['NISSAN'] =$YeniArabalar;
print "<hr>";
print_r($araba);
?>