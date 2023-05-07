<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uygulama 3 çıkış sayfası</title>
</head>
<body>
    <?php 
    session_destroy();
    echo "oturum sonlandırıldı : ";
    echo '<a href="29-3_Uygulama_kaydet.php"> oturumu oluşturmak için tıklayınız...</a>';
    
    ?>
</body>
</html>