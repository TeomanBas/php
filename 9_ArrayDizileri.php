<?php
$Renkler = array("siyah",
                "beyaz",
                "kırmızı",
                "mavi",
                "yeşil",
                "sarı",
                "turuncu",
                "gri");

print_r ($Renkler);
print "<hr>";
print "dizinin 0,2 ve 6 ıncı elemanları : ";
print $Renkler[0]." ".$Renkler[2]." ".$Renkler[6];
print "<hr>";
print "dizide ".count($Renkler)." adet renk var.";
print "<hr>";
print "rasgele bir renk : ".$Renkler[rand(0,count($Renkler)-1)];
?>