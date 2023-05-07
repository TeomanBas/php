<?php 
print("kullanım şekli : setcookie(isim,saklanacak_veri,zaman aşımı,yol,alan,güvenlik,sadece_http)");
print("<br>");
print("isim : cookie verilecek isim");print("<br>");
print("saklanacak veri: cookie içerisinde hangi verilerin tutulacağı bilgisi");print("<br>");
print("zaman_aşımı : cookie saniye cinsinden değer alır 0 atanırsa tarayıcı kapandığında cookienin ömrü biter ve 
 bilgisayardan silinir");print("<br>");
print("yol : sunucu üzerinden etkin olacağı bölgeleri belirtir / şeklinde belirtilirse tüm dizinlerde geçerli olur
/satis şeklinde belirlenirse satis dizinin altında etkin olur");print("<br>");
print("alan : cookie nin kullanılabileceği alan ve alt alanlar deneme.com tanımlanırsa tüm alt alanlarda etkin olur
belge.deneme.com olursa sadece belge sub domain altında etkin olur");print("<br>");
print("güvenlik : true yada false değer alır true kullanılırsa cookie sadece güvenli bağlantı mevcutsa gönderilir varsayılan değeri false olur");print("<br>");
print("sadece_http : true olduğu takdirde cookie sadece http protokolü üzerinden erişilebilir yani javascript gibi diller aracılığı ile erişilemez true veya false değeri alabilir");print("<br>");

print("setcookie() : fonksiyonundan false değeri dönüyorsa bu fonksiyondan önce işlem yaptırılmış anlamına gelmektedir ve cookie oluşturulmayacaktır.");print("<br>");

print('oluşturulan bir cookie değerini okumak için $_COOKIE("çerez_adı")');print("<br>");

print('oluşturulan cookie silmek için geçmiş zamanlı bir değer verilebilir ikincisi boş bir cookie oluşturmaktır.
setcookie("cerez") şeklinde bir kullanım yeniden cookie oluşmasına neden olur ve eski cookie değeri silinmiş olur.');
print("<br>");
print("@ işareti nedir =eğer herhangi bir değişken çağrılır ve kullanılır ken bu işaret kullanılırsa oluşan hata mesajları gösterilmez");
$deger="merhaba dünya";
setcookie("ilkcerez",$deger,time()+3600,'/28_setcookieCerezler.php',"192.168.100.207",0);
print("<br>");
print("oluşturğumuz cookie değeri :");
echo $_COOKIE["ilkcerez"];
?>