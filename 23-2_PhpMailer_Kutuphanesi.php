<?php 
// php mail fonksiyonu spam postalardan dolayı nerdeyse tüm posta sunucularında engellenmiş
// bunun için php mailer kullandım ve bu kütüphaneyi php composer ile windows makinaya kurdum.
// https://getcomposer.org/
// https://packagist.org/
// https://github.com/PHPMailer/PHPMailer


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';


// bu kısımdaki değişkenler form doldurulmadığı için boş olacaktır bu yüzden başta geçersiz e-posta
// yazdırılabilir
$email = isset($_POST['email']) ? $_POST['email'] : null;
$subject = isset($_POST['subject']) ? $_POST['subject'] : 'E-posta Konusu';
$content = isset($_POST['message']) ? $_POST['message'] : null;

$mail = new PHPMailer(true); 
try {
    // MAİL SUNUCUSU AYARLARI 
    // BU KISIM MAİLİ GÖNDEREN SUNUCU YADA MAİL SUNUCUSU AYARLARINI KAPSAR //////////
    $mail->setLanguage('tr'); 
    // HATA DENETİMİ DEBUG AKTİF EDİLDİ
    $mail->SMTPDebug = 2; 
    $mail->isSMTP();  
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'ornekmail@deneme.com'; 
    //artık üçüncü taraf uygulamalar için google 30 mayıs 2022 itibari ile oturum açmayı engelliyor
    // uygulamalar için bir anahtar oluşturarak tek seferlik bir login işlemi gerektiren uygulama anahtarları diye bir 
    // yönteme geçti yani bir uygulama anahtarı oluşturup buradaki password kısmına bu anahtarı yerleştirmemiz mail işlemleri için yeterli olacaktır.
    $mail->Password = 'burada google hesaplardan oluşturulan uygualama anahtarı olmalı';  
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    // MAİL SUNUCUSU AYARLARI BİTTİ /////////////////////////////////////////////////

    // formu dolduran kişinin Reply-To şeklinde mail adresi alınıyor
    $mail->setFrom($email, $subject);
    // mailin gönderileceği adrestir
    $mail->addAddress('mailin gönderileceği mail adresi',$subject);
    //Reply-To kısmına formdaki mail adresi eklendi
    $mail->addReplyTo($email, $subject); 

    
    $mail->isHTML(true); 
    $mail->Subject = $subject; 
    $mail->Body = $content; 

    // MAİL GÖNDERİLDİ
    $mail->send();

    print "MAİL GÖNDERİLDİ";

} catch (Exception $e){
    echo $e->errorMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PhpMailer Örneği</title>
</head>
<body>
<form action="" method="POST">
    <label>Ad - Soyad:</label>
    <input type="text" name="name"> <br> <br>
    <label>E-Posta Adresi:</label>
    <input type="text" name="email"> <br> <br>
    <label>Telefon</label>
    <input type="text" name="phone"> <br> <br>
    <label>İletişim Konusu:</label>
    <input type="text" name="subject"> <br> <br>
    <label>Mesaj:</label>
    <textarea name="message" cols="30" rows="5"></textarea> <br> <br>
    <button type="submit">Gönder</button>
</form>
</body>
</html>


