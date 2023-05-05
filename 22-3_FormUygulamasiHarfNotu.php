<?php
//Dizi boş iken false dönüyor
if($_POST){
    print("gönderme başarılı");
    $Vize=$_POST['Vize'];
    $Final=$_POST['Final'];
    $Ortalama=($Vize/100)*30+($Final/100)*70;
    if(90<=$Ortalama){
        $Hnotu="AA";
    }elseif(85<=$Ortalama){
        $Hnotu="BB";
    }elseif(75<=$Ortalama){
        $Hnotu="CC";
    }elseif(65<=$Ortalama){
        $Hnotu="DD";
    }elseif(55<=$Ortalama){
        $Hnotu="EE";
    }elseif(45<=$Ortalama){
        $Hnotu="EF";
    }else
        $Hnotu="FF";
}else{
    print("gönerme başarısız");
}
?>
<form action="" method="POST">
    <table border="1px">
        <tr>
            <td> vize notu</td>
            <td><input type=text name="Vize"></td>
        </tr>
        <tr>
            <td> final notu</td>
            <td><input type=text name="Final"></td>
        </tr>
        <tr><td><input type="submit" value="hesapla"></td></tr>
    </table>
</form>
<h3><?php 
if(isset($Ortalama) && isset($Hnotu)){
    print("Ortalama : ".$Ortalama." - "."Harf Notu : ".$Hnotu);
}else{
    print("form gönderimi başarısız olduğu için hesaplanamadı");
}
?></h3>

