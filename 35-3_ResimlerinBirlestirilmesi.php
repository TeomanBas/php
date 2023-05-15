<?php 
// imagecopymerge(hedef,kaynak,h_x,h_y,k_x,k_y,k_gn,k_yk,oran): birden fazla resmin birleştirilmesini sağlar
// h_x ve h_y hedef resimdeki x ve y kordinatları
// k_x ve k_y kaynak resimdeki x ve y kordinatları
// k_gn ve k_yk kanynak resimdeki bölüm genişliği ve yüksekliği 0-100 arasında değer alarak
// resim arasındaki geçirgenlik ayarlanır.


// imagesx(): parametre olarak verilen resim değişkenine alt genişlik verir.
// imagesy(): parametre olarak verilen resim değişkenine alt yükseklik verir.

header("Content-type:images/png");
$foto=imagecreatefrompng("alinti.png");
$etiket=imagecreatetruecolor(imagesx($foto),30);
$beyaz=imagecolorallocate($etiket,255,255,255);
$kirmizi=imagecolorallocate($etiket,255,0,0);
imagefilledrectangle($etiket,5,5,imagesx($foto)-5,25,$beyaz);
$metin="windows 10";
$font2="broadway.ttf";
imagettftext($etiket,10,10,26,20,$kirmizi,$font2,$metin);

$sx=imagesx($etiket);
$sy=imagesx($etiket);

imagecopymerge($foto,$etiket,0,imagesy($foto)-30,0,0,imagesx($etiket),imagesy($etiket),40);
imagepng($foto,"alinti1.png");
imagedestroy($foto);

?>