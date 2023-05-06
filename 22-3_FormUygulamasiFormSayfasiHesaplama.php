<?php 
if(isset($_GET['submit'])){
    echo "1.Değer : ".$_GET["d1"]."<br>";
    echo "2.Değer : ".$_GET["d2"]."<br>";
    switch($_GET['islem']){
        case "topla":
            echo " TOPLAMA İŞLEMİ ";
            echo " SONUÇ ".$_GET["d1"]+$_GET["d2"];
            break;
        case "cikarma":
            echo " ÇİKARMA İŞLEMİ ";
            echo " SONUÇ ".$_GET["d1"]-$_GET["d2"];
            break;
        case "carpma":
            echo " ÇARPMA İŞLEMİ ";
            echo " SONUÇ ".$_GET["d1"]*$_GET["d2"];
            break;
        case "bolme":
            echo " BÖLME İŞLEMİ ";
            echo " SONUÇ ".$_GET["d1"]/$_GET["d2"];
            break;
    }

}else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormSayfasi</title>
</head>
<body>
    <form action="" method="GET">
        <table>
            <tr><td>birinci değeri giriniz</td>
                <td><input type="text" name="d1"></td>
            </tr>
            <tr><td>ikinci değeri giriniz</td>
                <td><input type="text" name="d2"></td>
            </tr>
            <tr>
                <td>işlemi seçiniz</td><br>
                <td>
                <input type="radio" name="islem" value="topla">Toplama<br>
                <input type="radio" name="islem" value="cikarma">Çıkarma<br>
                <input type="radio" name="islem" value="carpma">Çarpma<br>
                <input type="radio" name="islem" value="bolme">Bölme<br>
                </td>
            </tr>
            <tr><td><input type="submit" value="Hesapla" name="submit"><td></td></tr>
            <tr><td><input type="reset" value="Temizle" name="submit"><td></td></tr>

        </table>
    </form>
    
</body>
</html>
<?php
}
?>