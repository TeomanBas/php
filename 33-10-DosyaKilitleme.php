<?php 
print("web sayfalarında kullanılan dosyalara aynı anda birden fazla kişi erişmeye çalışıyor olabilir 
bir dosya değiştirilirken başka bir kullanıcının aynı dosya üzerinde çalışması sorunlara yol açabilmekedir.
bunun dosyalara lock konularak işlemin yapılması daha sonra kullanıcının dosya ile işi bittikten sonra lock ın kaldırılması
gerekmektedir");
echo "<br>";
echo ' kullanım şekli : flock(dosya_degiskeni,işlem)';
echo "<br>";
echo "işlem dosyanın kilitleme türünü belirtir.<br>
dosya üç şekilde kilitlenebilri <br>
LOCK_SH :diğer kullanıcılar dosyayı paylaşmalarına izin verilir <br>
LOCK_EX :diğer kullanıcıların dosya ile işlem yapmasına engel olur <br>
LOCK_UN :diğer dosyanın kilidini açar <br>";
$dosya=fopen("deneme2.txt","w") or die("dosya açılamadı");
flock($dosya,LOCK_EX);
//fwrite($dosya,"yeni mesaj");
fputs($dosya,"yeni mesaj 2");
flock($dosya,LOCK_UN);
fclose($dosya);

?>