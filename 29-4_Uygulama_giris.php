<?php
session_start();
?>

<?php
if(@$_POST["k_adi"]=="admin" && @$_POST["sifre"]=="root"){
    $_SESSION["login"]="OK";
    echo "giriş başarılı";
    echo '<table border="1"><tr>
    <td><a href="29-4_Uygulama_mesaj.php"> mesajlarım</a></td>
    </tr></table>
    ';
}else{
    echo "girilen bilgiler hatalı;";
    echo "<br><a href='29-4_Uygulama_login.php'> Geri dön</a>";
}


?>