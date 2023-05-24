<?php 
/**Abstract
 *bir nesnenin veya değişkenin dış ortamdan yalıtılması soyutlanmasıdır
 *public,private,protected olarak 3 şekilde tanımlanır.public değişkenler her yerden erişilebilen değişkenlerdir
 *private ise sadece bağlı olduğu sınıf içerisinden erişilebilir
 *protected ise sadece bağlı olduğu sınıftan erişilebilir anca inheritance yoluyla diğer
 *sınıflar içerisinden de erişilebilmektedir.
 */
class KarsilamaMesaji{
    public $isim;
    public $yas;
    private $mesaj;
    public function  mesajyazdir(){
        return "isim : ".$this->isim." yaş : ".$this->yas." mesaj :".$this->mesaj;
    }
}

$kisi1= new KarsilamaMesaji();
$kisi1->isim="ali";
$kisi1->yas="22";

// bu kısım hata verecektir.
// $kisi1->mesaj="aliden  selamlar ";
// echo $kisi1->mesaj;
// Fatal error: Uncaught Error: Cannot access private property KarsilamaMesaji::$mesaj in C:\Users\30_Nyp-Temel-Prensipler.php:23 Stack trace: #0 {main} thrown in C:\Users\Pc\Desktop\Paylasim\apache_localhost\30_Nyp-Temel-Prensipler.php on line 23

echo $kisi1->isim;
echo $kisi1->yas;

echo "<br>".$kisi1->mesajyazdir();


echo "<hr>";
echo "<hr>";
echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**Inheritance(Kalıtım)
 * kalıtım bir varlıktan başka bir valığa kalıtsa özelliklerin aktarılması olarak tanımlanır
 * class a ait özelliklerin kendisinden türetilmiş bir alt sınıfa aktarılması olayıdır.
 * amaç aynı metotları tekrar tekrar yazmamak ve kod tekrarını önlemektir.
 * 
 */

 // extends kelimesi ile bir alt class oluşturuyoruz.extends edilmesse başka bir sınıfın alt class ı
 // olmadığı için kalıtım kullanılamıyor
 class UlkeMesaj extends KarsilamaMesaji{
    public $Ulke;

    public function ulkmsg(){
        return "merhaba ";
    }

    public function GenelMesaj(){
        echo parent::mesajyazdir()." ülke mesajı :".$this->ulkmsg().$this->Ulke;
    }
 }

$kisi2=new UlkeMesaj;
$kisi2->isim="ahmet";
$kisi2->yas="19";
$kisi2->mesaj="ahmetden selamlar";
$kisi2->Ulke="izlanda";
$kisi2->GenelMesaj();

echo "<hr>";
echo "<hr>";
echo "<hr>";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**Interface
 * Soyutlama işlemine benzer aslında bir class a başlanmadan önce zorunlu olarak tanımlanması gereken metotların
 * belirtildiği bir yapıdır.Yani bir interface içinde tanımlananmetotları bu interface tarafından  genişletilen (implements)
 * ile yapılır soyutlamada ise extend ile yapılıyordu, alt classlarda mutlaka yazılmalı yani oluşturulmalıdır.Eğer bu kurala
 * uyulmassa fatal error hataları oluşur.
 */

 //aşağıda örnek bir arayüz tanımlaması yer alıyor
interface ArayuzIsmi{
    public function fonksiyon_1($a,$b);
}
interface AltArayuzIsmi extends ArayuzIsmi{
    public function fonksiyon_2($a);
}
class SinifIsmi implements ArayuzIsmi{
    public function fonksiyon_1($a,$b){
        $a=$this.$a;
        $b=$this.$b;
    }
    public function fonksiyon_2($a){
        $a=$this.$a;
    }
}
///////////////////////////////////////////////////



?>