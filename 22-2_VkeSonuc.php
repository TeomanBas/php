<?php 
print ("boy : ".$_POST['boy']);print("<br>");
print ("kilo : ".$_POST['kilo']);print("<br>");
$vke=$_POST['kilo']/(($_POST['boy']/100)^2);
print("vke sonuc : ".$vke);
?>