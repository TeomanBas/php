<?php 
if(@$_COOKIE["login"]=="OK"){
    echo "mesajlar";
    echo "<br><a href='28-1_Uygulama_login.php'>Geri Dön></a>";
}else{
    echo "giriş yapınız";
    echo "<br><a href='28-1_Uygulama_giris_login.php></a>";
}
?>