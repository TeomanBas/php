<?php session_start()?><?php 
if(@$_SESSION["login"]=="OK"){
    echo "mesajlarım";
    echo "<br><a href='29-4_Uygulama_cikis.php'> ÇIKIP YAP</a>";


}else{
    echo "giriş yapınız";
    echo "<br><a href='29-4_Uygulama_login.php'> Geri dön</a>";

}
?>