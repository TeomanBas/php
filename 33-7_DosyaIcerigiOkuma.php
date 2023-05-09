<?php 
echo "fopen fonksiyonu ile açılan dısyadan bilgi okunmak istendiği zaman fgets() fread() fgetc() fseek() fonksiyonları kullnılmaktadır.";echo "<br>";
echo "fgets() : dosya içerisindeki bilgiller satır satır okunacaksa fgets fonksiyonu kullanılır";echo "<br>";
echo "fgets(dosya_degiskeni,uzunluk)";echo "<br>";
echo "dosya değişkeni ile açılırken  fopen fonksiyonunun atandığı değişkendir.";echo "<br>";
echo "uzunluk kaç byte bilgi okunacağını alır belirtilen değere kadar veya yeni satıra geçerse okuma işlemi sonlanır
eğer uzunluk parametresi kullanılmassa okuma işlemi satır sonuna kadar devam eder.birden çok satır okunmak istenirse döngü kullanılabilir.";echo "<br>";
echo "<br>";
echo "<hr>";
if ($dosya=(fopen("deneme.txt","r"))){
    while(!feof($dosya)){
        $satir=fgets($dosya,100);
        echo "$satir<br>";
    }fclose ($dosya);
    
}else{
    echo "dosya açılamadı";
}
echo "<br>";
echo "<hr>";
echo "fread fonksiyonu :dosya içerisindeki bilgileri satır satır
 okumak yerine belirlenen boyutta okumak için fread() fonksiyonunu kullanılır.Belirtilen boyuttan önce dosya sonuna gelirse okuma
 işlemi sonlandırır.parametre olarak dosya değişkenini ve okunacak boyutu byte cinsinden alır.";
echo " kullanımı : fread(dosya_değişkeni,uzunluk"; 
echo "<br>";
echo "<hr>";
if ($dosya=(fopen("deneme.txt","r"))){
    while(!feof($dosya)){
        $satir=fread($dosya,100);
        echo "$satir<br>";
    }fclose ($dosya);
    
}else{
    echo "dosya açılamadı";
}
echo "<br>";
echo "<hr>";
echo "fgetc fonksiyonu karakter karakter okuma yapar parametre olarak sadece dosya değişkenini alır";
echo "<br>";
if($dosya=(fopen("deneme.txt",'r')))
{
    for($i=0;$i<=10;$i++){
        echo fgetc($dosya);
    }
    fclose($dosya);
}else {
    echo ("Dosya açılamadı");
}
echo "<br>";
echo "<hr>";
echo "fseek fonksiyonu dosya içeriğinin belirli bir konumdan sonrası okunmak istendiğinde fseek() fonkssiyonu ile okumaya başlanacak konum ve ne kadarlık ve ne kadarlık bilgi okunacağı belirlenir";
echo "<br>";
echo "kullanım şekli : fseek(dosya_değişkeni,nereye_kadar,nereden_itibaren)";
echo "<br>";
echo "nereye_kadar : dosya içerisinde konumlanacak yeni pozisyonu byte cinsinden belirler";
echo "nereden_itibaren dosya içerisinde bulunulan konumu belirtir.";
echo "<br>";
$dosya=fopen("sayilar.txt","r");
//dosya başından itibaren 12byte konumlan
fseek($dosya,12,SEEK_SET);
$yazi=fread($dosya,1024);
echo $yazi;
fclose($dosya);

echo "<br>";
echo "<br>";

$dosya=fopen("sayilar.txt","r");
//dosya sonundan itibaren 12byte konumlan
fseek($dosya,-12,SEEK_END);
$yazi=fread($dosya,1024);
echo $yazi;
fclose($dosya);

echo "<br>";
echo "<br>";

$dosya=fopen("sayilar.txt","r");
//dosya sonundan itibaren 12byte konumlandı
fseek($dosya,-12,SEEK_END);
$yazi=fread($dosya,1024);
echo $yazi;
// şimdi yazi ifadesinden konumlanılan kısım son satırın son 12 karakterinden sonraki karakterdir
// kalınan karakterden devam etmesi bekleniyor seek_cur kalınan yerden 3 karakter devam edecek
// kalınan yerden son karaktere kadar  olan karakter seti(önceki kısımda yazılan karakterler karakter kümesidir)baz alınarak
// sonran başlayarak karakterleri almaya başlar
fseek($dosya,-10,SEEK_CUR);
$yazi=fread($dosya,1024);
echo $yazi;
fclose($dosya);

echo "<br>";
echo "<hr>";

$dosya=fopen("sehirler.txt","r");
//dosya boyutunu alalım byte cinsinden
$dosyaboyutu=filesize("sehirler.txt");
$yarisi=$dosyaboyutu/2;
fseek($dosya,$yarisi);
$yazi=fread($dosya,10);
echo $yazi;
fclose ($dosya);


?>