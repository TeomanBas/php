<?php 
// aşağıdaki fonksiyonlar ile hazır olan resimler üzernde değişiklik yapılabilir.
// imagecreatefromgif()
// imagecraetefromjpeg()
// imagecreatefrompng()
// imagecreatefromwbmp()

header("Content-type:image/png");
// resim dosyasını değişkene atadık.
$resim=imagecreatefrompng("buton.png");

//renk tanımlaması
$beyaz=imagecolorallocate($resim,255,255,255);
$yesil=imagecolorallocate($resim,0,255,0);
$mavi=imagecolorallocate($resim,0,0,255);

// resim üzerinde bulunan bölgeyi yeşile boyayalım
imagefilledrectangle($resim,4,5,145,45,$yesil);
//yeni yazımız
imagettftext($resim,15,0,20,30,$mavi,"verdana.ttf,","merhaba");

imagepng($resim,"button.png");
imagedestroy($resim);

?>