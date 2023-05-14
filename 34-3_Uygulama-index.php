<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Bilgileri</title>
</head>
<body>
    <table width="850px" border="1px" height="200px" align="center">
        <tr>
            <td colspan="2" align="center" height="25px">
            <h2>ÖĞRENCİ BİLGİLERİ</h2>
            </td>
        </tr>
        <tr>
            <td width="200px" valign="top">
                <a href="34-3_Uygulama-index.php">Öğrenciler</a><br>
                <a href="34-3_Uygulama-index.php?go=yeni">Yeni Öğrenci Ekle</a><br>
                <a href="34-3_Uygulama-index.php?go=sil">Öğrenci Sil</a><br>

            </td>
            <td width="600px" valign="top" align="center">
                <?php 
                    switch(@$_GET['go']){
                        case "yeni":include("34-3_Uygulama-yeniogrenci.html");break;
                        case "sil":include("34-3_Uygulama-ogrencisil.php");break;
                        case "kayit":include("34-3_Uygulama-ogrencikaydet.php");break;
                        default:include("34-3_Uygulama-ogrenci.php");break;
                    }
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>