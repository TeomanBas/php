<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Fonksiyonu</title>
</head>
<body>
<p> request fonksiyonu post ve get metoduyla gönderilen veya cookie içeren değişkenleri okumak için kullanılır
    $_POST ve $_GET  fonksiyonlarının yerine $_REQUEST şeklindede kullanılabilir
</p>
   
    <?php 
    if (isset($_POST["submit"])){
        //kullanıcı adi: admin in md5 hash değeri
        $k_adi="21232f297a57a5a743894a0e4a801fc3";
        // şifre: pass1234 md5 hash değeri
        $sifre="b4af804009cb036a4ccdc33431ef9ac9";
        // md5 fonksiyonu içerine girilen değiern md5 hash değerinin döndürür
        if(md5($_REQUEST["kadi"])==$k_adi && md5($_REQUEST["sifre"])==$sifre){
            echo "giriş başarılı";echo "<br>";
            
        }else{
            
            header("location:26-RequestFonksiyonu.php");
        }
    }else{
        ?>
            <form method="POST" action="26-RequestFonksiyonu.php">
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