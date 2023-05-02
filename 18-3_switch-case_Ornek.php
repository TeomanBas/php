<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>switch case</title>
</head>
<body>
    <?php
    $sehir="istanbul";
    $mesaj="yaşadığınız il : ";
    $hata="konum bilgisi alınamadı";
    switch($sehir){
        case "ankara":
            echo $mesaj.$sehir;
        break;
        case "istanbul":
            echo $mesaj.$sehir;
        break;
        case "bursa":
            echo $mesaj.$sehir;
        break;
        case "izmir":
            echo $mesaj.$sehir;
        break;
        case "antalya":
            echo $mesaj.$sehir;
        break;
        default:
            echo $hata;
        break;
    }
    ?>
    
</body>
</html>