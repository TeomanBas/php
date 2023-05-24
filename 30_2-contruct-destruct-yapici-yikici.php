<?php
// contruct metodu ilk çalıştırılır destruct ise en son çalıştırılır
class Merhaba{
    function selamla(){
        echo "selamlama metodu çalıştı";
        echo "<br>";
    }
    function __destruct(){
        echo "en son metot çalıştı destruct";
        echo "<br>";
    }
    function __construct(){
        echo "ilk metod çalıştı constructor";
        echo "<br>";
    }
}

$selam =new Merhaba();
$selam->selamla();
?>