<?php 
session_start();

//post metodu ile cevap değişkeni alınıyor

if($_POST['cevap']==@$_SESSION['captcha']){
    echo "doğru";
}else{
    echo "yanlış";
}
//session içerisinde gelen captcha siliniyor
//unset($_SESSION['captcha'])
?>