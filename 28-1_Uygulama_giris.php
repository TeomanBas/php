<?php 
if((@$_POST["kullanici_adi"]=="admin") && ($_POST["sifre"]=="root")){
    setcookie("login","OK");
    echo "giriş başarılı";
    echo '

    
    <table border="1">
        <tr>
            <td><a href="28-1_Uygulama_mesaj.php">MESAJLARIM</td>
            <td><a href="28-1_Uygulama_cikis.php">ÇIKIŞ YAP</td>
        </tr>
    </table>
    ';
}else{
    echo "giriş başarısız";echo"<br>";
    echo '<a href="28-1_Uygulama_login.php">Geri Dön</a>';
    
}
?>