<?php 
if(isset($_GET['sil'])){
    $sil_no=@$_GET['ogr_no'];
    $sil_ad=@$_GET['ad'];
    
    $baglanti=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($baglanti,"okul");
    $sql="DELETE FROM `okul`.`ogrenciler` WHERE ogr_no='$sil_no' AND ogr_ad='$sil_ad'";
    $sorgu=mysqli_query($baglanti,$sql) or die ("başarısız işlem :");
    mysqli_close($baglanti);
    echo "silme başarı ile gerçekleşti.";

}else{
    ?>
        <table align="center" border="1px" bgcolor="#5c6ba7" width="600px">
    <tr align="center">
        <td>sıra no</td><td>ogrenci no</td><td>adi</td><td>soyadi</td><td>sil</td>
    </tr>
    <?php 
        $baglanti=mysqli_connect("127.0.0.1","root","");
        mysqli_select_db($baglanti,"okul");
        $sql="SELECT ogr_no,ogr_ad,ogr_soyad FROM ogrenciler;";
        $sorgu=mysqli_query($baglanti,$sql);
        $sayac=0;
        while($satir=mysqli_fetch_row($sorgu)){
            $sayac++;
            echo "<tr>
                <td width='55px' align='right'>$sayac</td>
                <td width='75px' align='right'>$satir[0]</td>
                <td>$satir[1]</td>
                <td>$satir[2]</td>
                <td><a href='34-3_Uygulama-ogrencisil.php?go=sil&ogr_no=$satir[0]&ad=$satir[1]&sil=ok' >Sil</a></td>
            </tr>";
        }
        mysqli_close($baglanti);
    ?> 

</table>

    <?php
}
?>