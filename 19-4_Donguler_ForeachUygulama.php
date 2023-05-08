<?php 
    if($_POST){
        $Metin=$_POST['Metin'];
        print $Metin;
        print("<hr>");
        $Metin=explode(".",$Metin);
        $KelimeSayisi=0;
        $OrtalamaKelimeOkuma=180;
        foreach($Metin as $Cumle){
            $Kelimeler=explode(" ",$Cumle);
            foreach($Kelimeler as $Kelime){
                if($Kelime=="Yabancı"){
                    print "yabancı kelime bulundu : ".$Kelime;
                }
                $KelimeSayisi=$KelimeSayisi +1;
            }
        }
        print("toplam kelime ".$KelimeSayisi."<br>");
        $OkumaHizi=$KelimeSayisi/$OrtalamaKelimeOkuma;
        if($OkumaHizi<1){
            $OkumaHizi= $OkumaHizi*60;
            print "Okuma hızı: ".$OkumaHizi." saniye/kelime";
        }else{
            print "Okuma hızı: ".$OkumaHizi." dakika/kelime";
        }
    }else{
    
?>

<form action="" method="POST">
    <table>
        <tr>
            <td>Metin</td>
            <td><textarea name="Metin" rows="10" cols="50"></textarea></td>
        </tr>
        <tr>
            <td><input type="submit" value="Metin Ayıkla" name="buton" value="ayikla"></td>
        </tr>
    </table>
</form>
<?php } ?>