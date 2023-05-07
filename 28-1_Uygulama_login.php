<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİŞ SAYFASİ</title>
</head>
<body>
    
</body>
</html>

<?php 
if(@$_COOKIE['login']=="OK"){
    echo "GİRİŞ BAŞARILI";
    echo '

    
    <table border="1">
        <tr>
            <td><a href="28-1_Uygulama_mesaj.php">MESAJLARIM</td>
            <td><a href="28-1_Uygulama_mesaj.php">ÇIKIŞ YAP</td>
        </tr>
    </table>
    ';

}else{

    ?>
    <form action="28-1_Uygulama_giris.php" method="POST">
        <table align="center" style="font-family:verdana">
            <tr>
                <td>kullanıcı adı</td>
                <td><input type="text" name="kullanici_adi"></td>
            </tr>
            <tr>
                <td>şifre</td>
                <td><input type="text" name="sifre"></td>
            </tr>
            <td>
                <td colspan="2" align="right"><input type="submit" name="girisyap">
                <input type="reset" value="temizle"></td>
            </tr>
        </table>


    </form>


<?php
}
?>