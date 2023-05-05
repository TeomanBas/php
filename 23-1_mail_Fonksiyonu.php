<?php
/* önce xampp üzerinde mercury ile smtp sunucusunun kurulması gerekli
daha sonra php.ini dosyası içerisinde 

[mail function]
;For Win32 only
;SMTP=localhost
;smtp_port=25
;For Win32 only
sendmail_from=me@example.com

satılarında değişiklik yapılması gereklidir
localhost  diğer mantıksal ağlardan gelecek mailler için 192.168.100.207 gibi local ip adresi verilebilir

bu mail fonksiyonu genelde popüler posta sunucuları için engellenmiştir çünkü 
mail fonksiyonu güvenlik bakımından zayıf bir protokoldür authentication 
gerektirmemesi ve spam mailler den dolayı bu şekilde gönderilen mailler ya spam kutusuna düşer
yada dikkate alınmaz buna alternatif olarak phpmailler kullanılabilir

*/

print("kullanım şekli : ");print("<br>");
print('mail("kime_gidecek","eposta_konusu","eposta_içeriği",headers_bilgileri);');
print("<br");print("<br");
print("yollanacak e postanın html içerikli olması gönderen eposta adresinin görüntülenmesi eposta 
içeriğinin dil kodunun tanımlanması,eposta Cc ve Bcc alıcılarının belirlenmesi
için headers olarak adlandırılan bilgilerin de gönderilmesi gerekmektedir.Headers parametresinin kullanım zorunluluğu yoktur");
print("<br>");
print('$headers özellikleri :<br> from : hangi eposta adresinden yollandığı <br>
Reply-To : mail yollanan kişi yanıtlamak istediğinde kullanılacak eposta adresi <br>
X-Mailer : maili gönderen yazılımdır. <br>
MIME-Version : Eposta MIME sürümüdür <br>
Content-type : içerik türü ve dil tanımlamalarını içerir <br>
To : Epostanın gönderileceği adresler<br>
Cc : Epostanın kopyasının gönderileceği görünür adresler <br>
Bcc : Eposta kopyasının gönderileceği gizli adresler <br>');

print("<br>");print("<br>");print("<br>");

$headers = 'MIME-Version: 1.0'."\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8'."\r\n";
$headers .= 'To: deneme1<deneme1@localhost>, deneme2<deneme2@localhost>, deneme3<deneme3@localhost>.'."\r\n";
$headers .= 'From: admin<admin@localhost>'."\r\n";
$headers .= 'Reply-To: Yanıt adresi<help@localhost>'."\r\n";
$headers .= 'X-Mailer: PHP/'.phpversion()."\r\n";
$headers .= 'Cc: acikkopya@localhost'."\r\n";
$headers .= 'Bcc: gizlikopya@localhost'."\r\n";
$alici = 'deneme1@localhost';
$konu = 'Test Epostası Yolluyoruz';
$mesaj = '<b><i>Merhaba Dünya</i></b>';

$SendController=mail($alici,$konu,$mesaj,$headers);

// mail fonksiyonu başarı ile çalışırsa 1 döner çalışmazsa sorunla karşılaşırsa 0 değeri döner
if($SendController==TRUE){
    print("MAİL BAŞARI İLE GÖNDERİLDİ.");
}else{
    print("MAİL GÖNDERME İŞLEMİ BAŞARISIZ.");
}


?>