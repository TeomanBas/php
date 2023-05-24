<?php 
// interface tanımı her iki fonksiyonunda parametreleri gönderilmek zorundadır
interface db_Baglanti{
    public function K_Bilgi($db_Kadi,$db_Sifre);
    public function db_adi($db_Isim);
}
//interface den türetilen class
class Baglanti implements db_Baglanti{
    public function K_Bilgi($db_Kadi,$db_Sifre){
        $this->$db_Kadi=$db_Kadi;
        $this->$db_Sifre=$db_Sifre;
        // global bu değişkene dışarıdan da erişileceği için tanımlandı
        // budeğişken veritabanı bağlantı bilgilerini taşıyacak
        global $Baglanti;
        $Baglanti=mysqli_connect("127.0.0.1",$db_Kadi,$db_Sifre);
        // bağlantı sağlanırsa true değilse false dönecek bu metot içerisinde bunu da kontrol ediyoruz
        if(!$Baglanti){
            die("veri tabanına bağlanamadı".mysqli_error($Baglanti)."<br>");
        }else{
            echo "veri tabanına bağlanıldı.";
        }
    }
    
    
    
    public function db_adi($db_Isim){
        $this->$db_Isim=$db_Isim;
        global $Baglanti;
        // database seçildi
        // db_secim başarılı olursa true değilse false dönecek
        $db_secim=@mysqli_select_db($Baglanti,$db_Isim);
        if(!$db_secim){
            die("database erişilemedi.".mysqli_error($Baglanti));
        }else{
            echo "database seçimi başarılı <br>";
        }

        //ornek sql sorgusu
        $Sql="SELECT * FROM ogrenciler";
        $Sorgu_Sonucu=mysqli_query($Baglanti,$Sql);

        while($Satir=mysqli_fetch_row($Sorgu_Sonucu)){
            /*echo `<hr>isim:{$Satir['ogr_ad']}<br>`.
            `<hr>soyad:{$Satir['ogr_soyad']}<br>`;*/
            echo "adı: <b>".$Satir[1]."</b> soyadı: <b> ".$Satir[2]."</b><br>";
            
        }
        mysqli_close($Baglanti);


    }
}

$Baglan=new Baglanti();
$Baglan->K_Bilgi('root',"");
$Baglan->db_adi("okul");

?>