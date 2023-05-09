<?php 
print('file_exists fonksiyonu ile dosya veya dizinlerin var olup olmadığı kontrol edilebilir.
eğer öyle bir dizin varsa true 1 yoksa false 0 döndürür.');print("<hr>");
if(file_exists("KullaniciDosyalari/.htaccess")){
    print("dosya var");
}else{
    print("dosya yok");
}
print("<hr>");
if(file_exists("KullaniciDosyalari/onemli/")){
    print("dosya var");
}else{
    print("dosya yok");
}
?>