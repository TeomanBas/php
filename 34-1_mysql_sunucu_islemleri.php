<?php 
$baglanti=mysqli_connect("127.0.0.1:3306","root","","okul") or die ("bağlantı başarısız");
$tablo=mysqli_select_db($baglanti,"okul") or die ("tablo açılamadı".mysqli_error($baglanti));
$sql='SELECT * FROM ogrenciler;';
$sorgu=mysqli_query($baglanti,$sql) or die ("sorgu çalıştırılamadı".mysqli_error($baglanti));


// sorguda çalıştırılan update insert ve delete işlemleri geriye sonuç döndürmez sadece 
// select işlemleri geriye sonuç döndürür.
echo "sorgudan dönen satırların sütun sayısı : ".mysqli_num_fields($sorgu);
echo "<br>";
echo "sorgudan dönen satırların sayısı : ".mysqli_num_rows($sorgu);

// sorudan dönen verileri okumak
// mysqli_fetch_row(sorgu değişkeni); bu fonksiyon sorgudan dönen verileri bir dizi içerisinde atar
// for  veya while döngüsü ile bu değişkenler yazdırılabilir yada erişilebilir ,dizide değişken kalmadığın da en son false
// değeri döner

$veri=mysqli_fetch_all($sorgu);
//echo count($veri);
//print_r($veri);

for ($i=0;$i<count($veri);$i++){
    echo "<br>";
    print_r($veri[$i]);
    echo "<br>";
}

echo "<br>";
echo "<hr>";
$i=0;
while($i<mysqli_num_rows($sorgu)){
    print_r($veri[$i]);
    $i++;
    echo "<br>";
}

// işlemler bittikten sorna mysql bağlantısının kapatılması gerekir.aksi takdirde diğer 
// bağlanmak isteyen kullanıcılar sorun yaşayabilir.
mysqli_close($baglanti);

echo "<br>";
echo "<hr>";

// hata kodlarını almak için mysqli_error ve mysqli_errno fonksiyonları kullanılır.
function db(){
$baglanti=mysqli_connect("127.0.0.1:3306","root","");
mysqli_select_db($baglanti,"okul");
$sql="SELECT * FROM ogrenciler;";
$Sorgu=mysqli_query($baglanti,$sql);

if(!$Sorgu){
    echo "<br><br><br><br>";
    return mysqli_errno($baglanti)." : ".mysqli_error($baglanti);
}else {
    while($Satir=mysqli_fetch_row($Sorgu)){
        echo "no : $Satir[0]<br>Adi : $Satir[1]<br>Soyadı : $Satir[2]<br>";
    }
    mysqli_close($baglanti);
}
}
db();

echo "<br>";
echo "<hr>";
?>