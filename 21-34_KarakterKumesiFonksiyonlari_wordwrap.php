<?php 
$metin="wordwrap() fonksiyonu string bir ifade içerinden 
istenilen uzunlukta alt satır veya tab gibi özel karakterler eklemek için kullanılır.
bölme true ise dizge belirtilen uzunlukta veya daha önce  satrıdaki son sözcüğü kesme pahasına böler";

echo wordwrap($metin,50,"<br>");
echo "<br>";echo "<br>";

echo wordwrap($metin,50,true);

?>