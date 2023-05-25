<?php 
// captcha verisinin taşınması için session tanımlaması yapıyoruz
session_start();
// ve sayfanın cache lenmemesi için cache kontrollerini kapatıyoruz bunu yapmazsak 
// sayfa önbellekte kalabilir ve sürekli aynı captcha resmi görünmesine neden olur 
header("Cache-Control:no-store,no-cache,must-revalidate");
header("Cache-Control:post-check=0, pre-check=0,false");
header("Pragma:no-cache");


// karakterler tanımlanıyor
$karakter="abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ0123456789";

// uretilen karakterler
$Captcha="";

for ($i=0;$i<=8;$i++){
    $Captcha.=$karakter[rand(0,strlen($karakter)-1)];
}

//oturum oluşturuluyor
$_SESSION['captcha']=$Captcha;

//kod arka plan resmi
$kodresmi=imagecreatefrompng("captcha_back.png");

//$resim_boyut=imagecreatetruecolor(180,100);
//$resim_zemin=imagecolorallocate($resim_boyut,0,255,0);
//captcha resmi oluşturuluyor

//resmin üzerine yazı yazılıyor
imagettftext($kodresmi,30,10,10,70,imagecolorallocate($kodresmi,255,100,50),'sunday_vibes_2/Sunday-Vibes.ttf',$Captcha);

// üretilecek içerik için sayfa içerik tipi belirleniyor
header("Content-type:image/png");

//resim oluşturuldu 
imagepng($kodresmi,null,0);
//oluşturulduktan sonra bellekten siliyoruz
imagedestroy($kodresmi);
?>