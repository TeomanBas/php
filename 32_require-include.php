<?php 
/*include ve required farkı şudur include ile dahil edilen dosya bulunmazsa hata verir
ancak kendinden sonraki kodlar çalışmaya devam eder,require ise bulunmassa hata verir ve 
kendinden sonraki kodlar çalışmaz */
include "UstKapsamDegisken1.php";
print("<h1>include satırından sonraki satır</h1>");

require "UstKapsamDegisken1.php";
print("require satırından sonraki satır");
?>