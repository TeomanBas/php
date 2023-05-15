<?php 
// sayfanın içerik tipi belirtildi
// header("Content-type:image/jpeg");
// belli ölçülerden resim oluşturuldu ve değişkene atandı.eğer resim oluşturulursa true değilse false değer döner
//$resim=imagecreate(100,50);
// resim sayfaya çıktı olarak basılıyor
// imagejpeg($resim);

//-------------------------------------------------------------------------------------
// boyutları belirtilen renkli boş bir resim alanı oluşturur.eğer resim oluşturulursa true değilse false değer döner
//$resim1=imagecreatetruecolor(500,500);
// imagejpeg($resim1);

//-------------------------------------------------------------------------------------
// oluşturulan resimler sadece sayfa üzerinden görüntülenmek üzere değilde image dosyası
// olarakta kayıt edilebilir
// imagejpeg($resim_degiskeni,dosya_ismi,kalite)
// imagejpeg(resim_değişkeni,"resim1.jpeg",0-100);
//imagejpeg($resim1,"resim1.jpeg","75");
// resmi bellekten siler.
//imagedestroy($resim1);

//-------------------------------------------------------------------------------------
// belirtilen boyutlar ve özelliklere göre gifler oluşturup saklanabilir
// imagegif(resim_degiskeni,dosya_ismi);
// header("Content-type:image/gif");
// jpeg formatında resim oluşturuldu
// $resim2=imagecreatetruecolor(500,500);
// imagegif($resim2,"resim2.gif");

//-------------------------------------------------------------------------------------
// belirtilen boyutlar ve özelliklere göre wbmp formatında resim oluşturup saklanabilir
// header("Content-type:image/wbmp");
// $resim=imagecreatetruecolor(500,500);
// oluşturulacak resim için arka plan tanımlaması yapar ve resim değişkenine 
// $zemin=imagecolorallocate($resim,255,120,50);
// wbmp formatında resim oluşturuldu
// imagewbmp($resim,"resim.wbmp",$zemin);

//-------------------------------------------------------------------------------------
// png formatında resim oluşturma
// header("Content-type:image/png");
// $resim=imagecreatetruecolor(500,500);
// imagepng($resim,"resim.png");

//-------------------------------------------------------------------------------------
// imagecolorallocate() oluşturulacak olan resim için renk tanımlar.
// header("Content-type:image/jpeg");
// $resim=imagecreate(100,50);
// $yesil=imagecolorallocate($resim,0,255,0);
// imagejpeg($resim);
// imagedestroy($resim);

//-------------------------------------------------------------------------------------
// imagefill(resim_degiskeni,x,y,renk_degiskeni)belirtilen kordinatlardan başlarak resmi boyar 
// header("Content-type:image/jpeg");
// $resim_cizgi=imagecreatetruecolor(1000,900);
// $renk=imagecolorallocate($resim_cizgi,255,0,0);
// imagefill($resim_cizgi,0,0,$renk);
// imagejpeg($resim_cizgi);
// imagedestroy($resim_cizgi);

//--------------------------------------------------------------------------------------
// imagefilledrectangle(resim,x1,y1,x2,y2,renk_değişkeni) içi dolu dikdörtgen çizmek için kullanılır
// header("Content-type:image/png");
// $resim=imagecreatetruecolor(300,50);
// $kirmizi=imagecolorallocate($resim,255,0,0);
// $yesil=imagecolorallocate($resim,0,255,0);
// $mavi=imagecolorallocate($resim,0,0,255);

// kırmızı renkte dikdörtgen
// imagefilledrectangle($resim,10,10,90,40,$kirmizi);
// imagefilledrectangle($resim,100,10,190,40,$yesil);
// imagefilledrectangle($resim,200,10,290,40,$mavi);

// resmi oluşturmak
// imagepng($resim);

// resim bellekten silinsin
// imagedestroy($resim);

//--------------------------------------------------------------------------------------
// imagefilledpolygon(resim_değişkeni,noktalar,nokta_sayısı,renk_değişkeni)
// nokta sayısı :çokgeni oluştururan noktaların kordinatlarını içeren dizi değişkeni
// header("Content-type:image/png");
// $noktalar=array(40,50,50,140,60,60,140,50,50,40,10,10,50,60,1,1);
// $resim=imagecreatetruecolor(150,150);
// $gri=imagecolorallocate($resim,176,171,178);
// $yesil=imagecolorallocate($resim,0,255,0);

// imagefill($resim,0,0,$gri);
// imagefilledpolygon($resim,$noktalar,8,$yesil);
// imagepng($resim);
// imagedestroy($resim);

//--------------------------------------------------------------------------------------
// imageline() çizgi çizmek için kullanılır çizginin kalınlığı değiştirilemez kalın çizgi
// çizmek isteniyorsa birbirine yakın kordinatlarda çizgi çizdirilebilir.
// header("Content-type:image/png");
// $resim=imagecreate(201,101);
// $beyaz=imagecolorallocate($resim,255,255,255);
// $kirmizi=imagecolorallocate($resim,255,0,0);
// $mor=imagecolorallocate($resim,100,50,100);
// imagefill($resim,0,0,$beyaz);
// imageline($resim,0,0,200,0,$kirmizi);
// imageline($resim,0,0,0,100,$kirmizi);
// imageline($resim,200,0,200,100,$kirmizi);
// imageline($resim,200,0,200,0,$kirmizi);
// imageline($resim,0,0,200,100,$mor);
// imageline($resim,0,100,200,0,$mor);
// imageline($resim,1,100,200,1,$mor);

// imagejpeg($resim);
// imagedestroy($resim);

//--------------------------------------------------------------------------------------
// imagestring(resim_degiskeni,yazitipi,x,y,renk_degiskeni) yatay olarak grafik tabanlı
// yazı yazdırmak için kullanılır.
// imagestringup(resim_degiskeni,yazi_tipi,x,y,yazi,renk) 90 derece döndürülmüş olarak yazı yazdırır.
// imagettftext(resim_degiskeni,boyut,açı,x,y,renk,yazi_tipi,yazi) mevcut yazı tipleirni kullanarak 
// grafik tabanlı yazı oluşturmak.

// header("Content-type:image/png");

// $resim=imagecreate(150,150);
// $zemin_rengi=imagecolorallocate($resim,255,100,55);
// $yazi_rengi=imagecolorallocate($resim,255,255,255);
// yazının oluşturulması
// imagestring($resim,5,15,5,"Hello World",$yazi_rengi);
// döndürülmüş yazının oluşturulması
// imagestringup($resim,5,10,140,"Hello World",$yazi_rengi);
// resmin oluşturalım
// imagepng($resim);
// imagedestroy($resim);


//--------------------------------------------------------------------------------------
// imagettftext(resim_degiskeni,boyut,açı,x,y,renk,yazi_tipi,yazi) mevcut yazı tipleirni kullanarak 
// grafik tabanlı yazı oluşturmak.

// header("Content-type:image/png");
// $resim=imagecreatetruecolor(150,150);
// $zemin_rengi=imagecolorallocate($resim,255,100,55);
// $yazi_rengi=imagecolorallocate($resim,255,255,255);
// imagefill($resim,0,0,$renk);
// çapraz yazını oluşturulması
// $yazi_tipi_file='broadw.ttf';
// $yazi_tipi='comic.ttf';
// çapraz yazı oluşturmak
// imagettftext($resim,20,50,50,21,$yazi_rengi,$yazi_tipi_file,"Hello World");
// imagepng($resim);
// imagedestroy($resim);


?>