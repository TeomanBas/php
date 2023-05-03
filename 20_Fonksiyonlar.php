<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php 
    function mesaj(){
        print("HELLO WORLD");
        print("<br>");
        print("<hr>");
        return 2;

    }
    mesaj();
    ?>
    <title>Fonksiyonlar</title>
</head>
<body>
<?php
print("Fonksiyonlar içerisinde tanımlanan değişkenler sadece fonksiyon içerisinde geçerlidir");
print("<br>");
print("function Fonksiyon_adi(arg_1,arg_2,...){");print("<br>");
print("yapılacak işlemler");print("<br>");
print("}");print("<br>");
print("<hr>");

print("fonksiyonun herhangi bir değer döndürmesi isteniyorsa return kullanılır.");
print("<hr>");
mesaj();
print (mesaj());


?>

    
</body>
</html>