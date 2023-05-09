<?php 
echo "fwrite ve fputs fonksiyonları dosyaya bilgi yazmak için kullanılır";
echo "<br>";
echo " kullanım şekli : fwrite(dosya_değişkeni,yazılacak_metin,uzunluk) ";
echo "<br>";
echo "uzunluk ne kadar byte lık karakter yazılacağını ifade eder uzunluk kadar karakter yazıldıktan sonra
yazma işlemi sona erer";
echo "<hr>";
$dosya=fopen("deneme1.txt","w") or die("dosya açılamadı");
fwrite($dosya,"w parametresi dosyanın içeriğini siler ve karakterleri sonra yazar.");
fputs($dosya,"fputs dosyanın sonundan yazmaya başlar");
fclose($dosya);
$dosya=fopen("deneme1.txt","r") or die("dosya açılamadı");
$yazi=fread($dosya,1024);
fclose($dosya);
echo $yazi;
echo "<hr>";
$dosya_adi="deneme2.txt";
$mesaj="hello world";
//dosyanın yazılabilirliği kontrol ediliyor
if(is_writable($dosya_adi)){
    $dosya=fopen($dosya_adi,"a") or die("dosya açılamadı");
    //dosyaya bilginin yazılması
    fwrite($dosya,$mesaj) or die("dosyaya yazma işlemi başarısız");
    echo "dosyaya yazılacak metin '$mesaj' başarı ile yazıldı";
}else{
    echo "dosya yazılabilir değil";
}

?>