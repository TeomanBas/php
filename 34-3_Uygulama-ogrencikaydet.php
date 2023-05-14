<?php 
@$ogr_adi=$_POST['adi'];
@$ogr_soyadi=$_POST['soyadi'];
@$ogr_dtar=$_POST['dtar'];

if((@$ogr_adi=="") ||(@$ogr_soyadi=="") ||(@$ogr_dtar=="")  ){
    echo "öğrenci adı , öğrenci soyadı ve öğrenci doğum tarihi bilgilerinin girilmesi zorunludur.";
}else{
    $baglanti=mysqli_connect("127.0.0.1","root","","okul");
    //if($baglanti) die("mysql bağlantısı kurulamıyor : ");
    mysqli_select_db($baglanti,"okul") or die ("veri tabanı açılamıyor".mysqli_error($baglanti));
    $sql="INSERT INTO `okul`.`ogrenciler`(ogr_ad,ogr_soyad,ogr_dogum_tarih) 
    VALUES ('$ogr_adi','$ogr_soyadi','$ogr_dtar');";
    $sorgu=mysqli_query($baglanti,$sql) or die(mysqli_error($baglanti));
    if($sorgu){
        echo "kayıt başarı ile girilmiştir.<br><a href='34-3_Uygulama-index.php'>Ogrenciler Sayfasi</a>";
    }else{
        echo "kayıt esnasında sorun oluştu";
    }
    mysqli_close($baglanti);


}


?>