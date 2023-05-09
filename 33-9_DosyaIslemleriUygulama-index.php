<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mesaj yaz index sayfasi</title>
</head>
<body>
    <table width="800px" border="1px">
        <tr>
            <td>
                <a href="33-9_DosyaIslemleriUygulama-index.php">mesaj girişi</a>
                <a href="33-9_DosyaIslemleriUygulama-index.php?go=mesajlar">Girilen Mesajlar</a>
            </td>
            <td><?php 
                switch(@$_GET['go']){
                    case "mesajlar":include("33-9_DosyaIslemleriUygulama-goster.php");break;
                    default:include("33-9_DosyaIslemleriUygulama-mesajgir.php");break;
                }
            ?></td>
        </tr>
    </table>
    
</body>
</html>