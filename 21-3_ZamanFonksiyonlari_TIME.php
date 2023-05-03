<?php
print("time fonksiyonu o anki sunucunun zamanı için int bir değer döndürür ve çoğunlukla günler arasındaki farkın hesaplanması için kullanılır.");
echo "<br>";
echo "Bugün : ".date("d-m-Y",time());echo "<br>";
echo "yarın : ".date("d-m-Y",time()+60*60*24);echo "<br>";
echo "2 gün önce: ".date("d-m-Y",time()-2*(60*60*24));echo "<br>";

?>