<?php 
print("unset fonksiyonu değişkeni tamamen yok eder");print("<br>");
$a="hello";
print($a);print("<br>");
unset($a);
if (isset($a)==True){
    print("değişken tanımlı");
}else{
    print("değişken tanımlı değil veya içerisi boş");
}


?>