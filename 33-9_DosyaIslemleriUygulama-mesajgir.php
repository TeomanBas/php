<?php 
if(!isset($_POST['submit'])){
    ?>
<form action="33-9_DosyaIslemleriUygulama-index.php" method="POST">
    <table>
        <tr>
            <td>Adınız ve Soyadınız</td><td><input type="text" name="ad"></td>
        </tr>
        <tr>
            <td>E-posta Adresiniz</td><td><input type="text" name="eposta"></td>
        </tr>
        <tr>
            <td>Mesajlarınız</td><td><textarea name="mesaj" cols="25" rows="5"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="gonder" name="submit"></td>
        </tr>
    </table>
</form>

<?php
}else{
    $adsoyad=$_POST["ad"];
    $eposta=$_POST["eposta"];
    $mesaj=$_POST["mesaj"];
    $dosya_adi='mesaj.txt';
    $yazilacak_bilgi=$adsoyad."||".$eposta."||".$mesaj."\n";
    //dosyayı ekleme modunda açalım
    $dosya=fopen($dosya_adi,'a') or die("dosya açılamadı");
    //dosyaya bilgiyi yazalım
    fwrite($dosya,$yazilacak_bilgi) or die("dosyaya bilgi yazılamıyor");
    //echo "kayıt işlemi başarılı";
    fclose($dosya);
    header("location:33-9_DosyaIslemleriUygulama-index.php?go=mesajlar");
}

?>
