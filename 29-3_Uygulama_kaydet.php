<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uygulama 3 kaydet sayfasi</title>
</head>
<body>
    <?php 
    $_SESSION["ad"]="jarvis";
    echo "değerler kaydedildi";
    echo '<a href="29-3_Uygulama_oku.php">görmek için tıklayınız</a><br>';
    echo '<a href="29-3_Uygulama_cikis.php"> oturumu kapatmak için tıklayınız...</a>';
    ?>
    
</body>
</html>