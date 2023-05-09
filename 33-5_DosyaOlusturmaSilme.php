<?php 
echo "touch : dosya oluşturmak için kullanılır var olan bir dosyanın erişim ve değişiklik zamanını ayarlayabildiği gibi dosya yoksa oluşturulmasını sağlar";
echo "<br>";
echo "unlink : dosyayı silmek için kullanılır ve sadece dosya_ismi parametresi alır.";
echo "<br>";
echo "touch fonksiyonunun kullanımı : touch(dosya_ismi,degisiklik_zamanı,erişim_zamanı)";
echo "eğer sadece dosya ismi parametresi ile kullanılırsa dosya yoksa oluşturulacaktır,
dosya var ise dosyanın değişiklik ve erişim tarihi touch fonksiyonunun çalışma zamanı ile ayarlanacaktır. örneğin dosyanın 
erişim tarihini 1 saat sonrası için ayrlamak için 'time()+3600' şeklinde parametre olarak verilebilir.";
echo "EĞER DOSYA VAR İSE ÜZERİNE OVVERİDE ETMEZ  SADECE ERİŞİM VE DEĞİŞTİRME ZAMANLARI DEĞİŞİR";
echo "<hr>";
$dzmn1=time()-7200;
$dzmn2=time()-3600;
$dosya='33-5_ornek.php';


if(touch($dosya)){
    echo "dosya olusturuldu | ";
    $zaman=date("F d Y H:i:s",fileatime($dosya));
    echo " dosyaya son erişim zamanı : ".$zaman;
    $zaman=date("F d Y H:i:s",filemtime($dosya));
    echo " | dosyaya son değişiklik zamanı : ".$zaman;
    echo "<hr>";

}else{
    echo "dosya olusturulamadı";
}

if(touch($dosya,$dzmn2,$dzmn2)){
echo "dosya erişim zamanı ve değişik zamanı değiştirildi.";echo"<br>";
$zaman=date("F d Y H:i:s",fileatime($dosya));
echo " dosyaya son erişim zamanı : ".$zaman;
$zaman=date("F d Y H:i:s",filemtime($dosya));
echo " | dosyaya son değişiklik zamanı : ".$zaman;
echo "<hr>";
}

if(unlink($dosya)){
    echo"dosya silindi";
}else{
    echo "dosya silinemedi.";
}
?>