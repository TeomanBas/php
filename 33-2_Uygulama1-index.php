<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
</head>
<body>
    <center>
        <table border="1px" height="600px" width="800px">
            <tr>
                <td width="150" valign="top">
                    <a href="33-2_Uygulama1-index.php">ANASAYFA</a><br>
                    <a href="33-2_Uygulama1-index.php?go=hakkimizda">HAKKIMIZDA</a><br>
                    <a href="33-2_Uygulama1-index.php?go=iletisim">İLETİŞİM</a><br>
                </td>
                <td valign="top">
                    <?php 
                        switch(@$_GET["go"]){
                            case "iletisim":include "33-2_Uygulama1-iletisim.html";break;
                            case "hakkimizda":include "33-2_Uygulama1-hakkimizda.html";break;
                            default: include "33-2_Uygulama1-anasayfa.html"; break;
                        }
                    ?>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>