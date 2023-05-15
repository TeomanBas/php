<?php 
header("Content-type:images/png");
// x ve y eksenlerinin içerdiği değerler
$x=array(2005,2006,2007,2008,2009);
$y=array(20,40,60,80,100,120,140,160,180);

// nüfus değeri
$nufus=array(5,35,45,75,180);

// x ve y eksenlerinde bulunan üçgenlerin nokta değerleri
$x_ok=array(270,195,270,205,275,200);
$y_ok=array(30,5,40,5,35,0);

// resim alanı oluşturuluyor
$resim=imagecreate(280,250);

// renk tanımlamaları
$beyaz=imagecolorallocate($resim,255,255,255);
$kirmizi=imagecolorallocate($resim,255,0,0);

// zemin rengi
imagefill($resim,0,0,$beyaz);

// x ve eksenleri çizgi renkleri
imageline($resim,35,200,270,200,$kirmizi);
imageline($resim,35,0,35,200,$kirmizi);

// x ve y eksenleri oku 
imagefilledpolygon($resim,$x_ok,3,$kirmizi);
imagefilledpolygon($resim,$y_ok,3,$kirmizi);


// x ve y kordinat etiketleri
$c1=75;
for($s=0;$s<count($x);$s++){
    imageline($resim,$c1,195,$c1,205,$kirmizi);
    imagestring($resim,4,$c1-12,205,$x[$s],$kirmizi);
    $c1 +=40;
}

$c1=180;
for($s=0;$s<count($y);$s++){
    imageline($resim,30,$c1,40,$c1,$kirmizi);
    imagestring($resim,3,0,$c1-7,$y[$s],$kirmizi);
    $c1 -=20;
}

// grafiğin oluşturulması
$x1=35;
$y1=200;
$y11=200;
for($s=0;$s<count($nufus);$s++){
    imageline($resim,$x1,$y11,$x1+40,$y1-$nufus[$s],$kirmizi);
    $x1+=40;
    $y11=$y1-$nufus[$s];
}

imagejpeg($resim,"nufus.png");
imagedestroy($resim);



?>