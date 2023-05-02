<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $sayfa=1;
    if($sayfa==1){
        print("
        <meta charset=".'UTF-8'.">
        <title>sayfa 1</title></head>    
        <body>
        ");
    }else{
        print("
        <meta charset=".'UTF-8'.">
        <title>sayfa 2</title></head>    
        <body>
        ");
    }
    print("$sayfa numaralı sayfadasınız");
    ?>

    
</body>
</html>