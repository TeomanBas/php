<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post metoduyla bilgi göndermek ve almak</title>
</head>
<body>
<p>get metodundan farklı olarak bir formdan gönderilen bilgiler gizli ve karakter sayısında bir sınırlandırma olmadan gönderilir
        Fakat php.ini konfigurasyon dosyası içerisinde (post_max_size=8M) gönderilecek bilginin uzunluğu maksimum 8mb olarak
        ayarlanmıştır.post metoduyla gönderilen  bilgiler tarayıcının adres görünmeyecektir. dolayısıyla get metodunda olduğu gibi kullanıcı tarafından adresin sonuna yeni değişkenler eklense  de karşı tarafta post ile gelen bilgiler 
        $_POST fonksiyonuyla alındığı için bu tür bilgiler istenmediği durumlarda alınmayacaktır.
    </p>
    <p>
        post metodunda gönderilecek bilgi formun action kısmında gelirtilen adresin sonuna eklenmelidir anca bu kullanımda get metoduyla gönderilen
        bilgi sabit olacaktır çünkü form submit yapılmadığı sürece blgiler gönderilmeyecektir.
    </p>
    <?php 
    if (isset($_POST["submit"])){
        //kullanıcı adi: admin in md5 hash değeri
        $k_adi="21232f297a57a5a743894a0e4a801fc3";
        // şifre: pass1234 md5 hash değeri
        $sifre="b4af804009cb036a4ccdc33431ef9ac9";
        // md5 fonksiyonu içerine girilen değiern md5 hash değerinin döndürür
        if(md5($_POST["kadi"])==$k_adi && md5($_POST["sifre"])==$sifre){
            echo "giriş başarılı";echo "<br>";
            // giriş yapan kişinin ip adresi
            echo $_SERVER["REMOTE_ADDR"];
        }else{
            // header(location:) sayfayı belirtilen sayfaya yönlendirir.
            header("location:25_POST_MetoduylaBilgiGonderme.php");
        }
    }else{
        ?>
            <form method="POST" action="25_POST_MetoduylaBilgiGonderme.php?<?php
            /*gizli bir şekilde ip yi almak */ echo "ip=".$_SERVER["REMOTE_ADDR"];?>">
                <table>
                    <tr>
                        <td>kullanıcı adı</td>
                        <td><input type="text" name="kadi"></td>
                    </tr>
                    <tr>
                        <td>şifre</td>
                        <td><input type="password" name="sifre"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="giriş yap"></td>
                    </tr>
                </table>
            </form>

        <?php
    }
    ?>
    
</body>
</html>