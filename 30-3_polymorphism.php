<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polymorphism</title>
</head>
<body>
    <p>kare alanı</p>
    <form action="30-3_polymorphism.php" method="POST">
        kenar uzunluğu : <input type="text" name="karealan">
        <input type="submit" value="kare alanı hesapla" name="sbmtkare">
    </form>
    <hr>
    <p>daire alanı</p>
    <form action="30-3_polymorphism.php" method="POST">
        yarı çap : <input type="text" name="dairealan">
        <input type="submit" value="daire alanı hesapla" name="sbmtdaire">
    </form>
    <hr>
</body>
</html>
<?php 
/**polymorphism 
 * kalıtım yaklaşımının biraz daha iç içe geçmiş halidir
 * üretilen alt sınıfların başkalaşım geçirerek farklı işlevler için kullanılmasını sağlar
 * ana class ın özelliklerini almak ve gerektiğinde değiştirmek için de kullanılabilir.
 **/

// ana class oluşturuluyor
class Sekil{
    // iki tane parametre alınacak bunlardan x olanı karenin kenar uzunluğu y olanı daire yarı çapı olacak
    private $x=0;
    private $y=0;

    function __construct(){
        // bulunduğu class içerisinde metotlar için anlamı taşır.
        self::Alan();
    }
    public function Alan(){
        echo "alan hesabını yapmak içi değer girin ve hesapla butonuna basınız.";
    }
}

// kare adında bir alt class tanımlaması yapılıyor
class Kare extends Sekil{
    function __construct($x){
        $this->x=$x;
    }
    function Alan(){
        echo "Karenin alanı: ".$this->x*$this->x;
    }
}
// kare adında bir alt class tanımlaması yapılıyor

class Daire extends Sekil{
    function __construct($y){
        $this->y=$y;
    }
    function Alan(){
        $pi=3.14;
        echo "Dairenin alanı :".$pi*$this->y*$this->y;
    }
}

// posttan gelen veri kontrol ediliyor ve objeler oluşturuluyor daha sonra gerekli alan 
// fonksiyonları çağrılarak değerler döndürülüyor
if(isset($_POST['sbmtkare'])){
    $KareAlan=new Kare($_POST['karealan']);
    $KareAlan->Alan();
}else if(isset($_POST['sbmtdaire'])){
    $DaireAlan=new Daire($_POST['dairealan']);
    $DaireAlan->Alan();
}else{
    $mesaj=new Sekil();
    $mesaj->Alan();

}
?>