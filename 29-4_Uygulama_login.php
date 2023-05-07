<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login sayfası</title>
</head>
<body>
    <?php 
        if(@$_SESSION["login"]=="OK"){
            echo "giriş başarılı";
            echo '
            <table>
                <tr>
                    <td><a href="29-4_Uygulama_mesaj.php">mesajlarım</a></td>
                    <td><a href="29-4_Uygulama_cikis.php">çıkış yap</a></td>
                </tr>
            </table>
            ';
        }else{
            ?>
             <form action="29-4_Uygulama_giris.php" method="POST">
        <table align="center" style="font-family:verdana">
            <tr>
                <td>kullanıcı adı</td>
                <td><input type="text" name="k_adi"></td>
            </tr>
            <tr>
                <td>şifre</td>
                <td><input type="text" name="sifre"></td>
            </tr>
            <td>
                <td colspan="2" align="right"><input type="submit" name="girisyap" value="giriş yap">
                <input type="reset" value="temizle"></td>
            </tr>
        </table>


    </form>
<?php
        }
    ?>
</body>
</html>