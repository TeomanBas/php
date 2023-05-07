<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Uygulama2</title>
</head>
<body>
    <?php 
    if(!isset($_SESSION["z_sayisi"])){
        echo "sayfayı ilk ziyaratiniz";
        $_SESSION["z_sayisi"] = 1;
    }else{
        echo "ziyaret sayınız : ".$_SESSION["z_sayisi"]."<br>";
        $_SESSION["z_sayisi"] =$_SESSION["z_sayisi"] + 1;
    }
    echo '<br><a href="29-2_Uygulama.php" >Yenile</a>';
    ?>
    
</body>
</html>