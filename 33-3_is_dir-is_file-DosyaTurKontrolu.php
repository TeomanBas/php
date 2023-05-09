<?php 
print("dosya mı dizin mi kontrolü yapmak için is_dir ve is_file fonksiyonları kullanılır.eğer dosya ise true 1 değilse false 0 döner");
print("<hr>");
if(is_file("KullaniciDosyalari/yazi.t")){
    print("dosya");
}else
print("dizin");
print("<hr>");
if(is_dir("KullaniciDosyalari")){
    print("dizin");
}else{
    print("dosya");
}

?>