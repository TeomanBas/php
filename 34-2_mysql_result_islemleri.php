<?php 
// mysqli_field_seek, mysqli_fetch_field ve mysqli_data_seek fonksiyonları result işlemleri için kullabilir.
// ***********
// mysqli_field_seek :sonucu belirli bir colona ayarlar. colon için kullanılır

$baglanti=mysqli_connect("127.0.0.1","root","","okul");
if(mysqli_connect_errno()){
    printf("connect failed: ",mysqli_connect_error());
}
$sorgu="SELECT * FROM ogrenciler;";

if($sonuc=mysqli_query($baglanti,$sorgu)){
    //tablo hakkında bilgi verir ve dönen sonuçtaki tablonun istenilen sütununa konumlanır
    mysqli_field_seek($sonuc,3);
    //kolonların özelliklerini verir default olarak 0 ıncı kolonun özelliklerini döner
    $bilgi=mysqli_fetch_field($sonuc);
    //print_r($bilgi);
    
    printf("Name:     %s\n", $bilgi->name);
    printf("Table:    %s\n", $bilgi->table);
    printf("max. Len: %d\n", $bilgi->max_length);
    printf("Flags:    %d\n", $bilgi->flags);
    printf("Type:     %d\n\n", $bilgi->type);
    
}
mysqli_close($baglanti);
echo "<br><hr>";
// ***********
// mysqli_data_seek :sonucu belirli bir satıra ayarlar. satır için kullanılır
// Başarı durumunda true, başarısızlık durumunda false döner.


$baglanti=mysqli_connect("127.0.0.1","root","","okul");
if(mysqli_connect_errno()){
    printf("connect failed: ",mysqli_connect_error());
}
$sorgu="SELECT * FROM ogrenciler;";

$sonuc=mysqli_query($baglanti,$sorgu);
// query sonucu gelen sonuc tablosundan 4 üncü satıra konumlandı
mysqli_data_seek($sonuc,3);
// tablodan ilk satırı aldı ve bir dizi içerisine attı
$satir=mysqli_fetch_row($sonuc);
//alınan satır içerisinden 1 ve 2 inci elemanları yazdırdık.
printf("adi : %s soyadi %s\n", $satir[1],$satir[2]);

mysqli_close($baglanti);
echo "<br><hr>";
?>