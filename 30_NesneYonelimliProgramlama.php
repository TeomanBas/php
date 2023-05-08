<?php 
//////////////////////////////////////////---Birinci Kısım---///////////////////////////////////////////////

// class tanımlaması
class Hesap{
    // Properties,Atributes,Fields -özellikler
    /* access modifiers public, private, protected
     privete - sadece bu class içerisinden erişilebilir
     public - class dışındanda erişilebilir
     protected - dışarıdan erişim sağlanamaz sadece inheritance kalıtım yoluyla erişim sağlanır.
     
     normalde gerekmedikçe özelliklerin public olması doğru değildir diğer sınıflar fonksiyonlar vb için privete yada protected olarak tutulması daha iyi olur
     sınıf içerisindeki özelliklerin dışarıdan kısıtlanması kapsülleme(encapsulation) olarakta bilinir.
     */
    /* method içerisine properties tanımlama
    private $Id=1;
    private $Isim="alice";
    protected $Bakiye=1000;
    */
    
    // constructtor oluşturduğumuz için tanımlanan değişkenlere değer vermemize gerek yok.
    // değer vermeden tanımlayabiliriz.
    private $Id;
    private $Isim;
    protected $Bakiye;
    

    //basit metod tanımlama
    public function HesapBilgiGetir(){
        //this şu anki obje içinde bulunulan sınıf yada metod anlamına gelir
        $sonuc=" sicil :".$this->Id." isim :".$this->Isim." bakiye :".$this->Bakiye;
        return $sonuc;
    }

    // constructor -yapılandırıcı metod 
    public function __construct($id,$isim,$bakiye){
        $this->Id=$id;
        $this->Isim=$isim;
        $this->Bakiye=$bakiye;
    }

    
}
//obje tanımlama
//$Hesap1=new Hesap;
/*
//obje içerisindekilere erişim
echo $Hesap1->id;
echo $Hesap1->isim;
echo $Hesap1->bakiye;


echo $Hesap1->HesapBilgiGetir();
echo "<hr>";
*/

//constructor yapısına göre yeni bir obje tanımlamak
$Hesap1=new Hesap(1,"alice",1000);
$Hesap2=new Hesap(2,"bob",2000);

echo $Hesap1->HesapBilgiGetir();
echo "<hr>";
echo $Hesap2->HesapBilgiGetir();
echo "<hr>";

//////////////////////////////////////////---Birinci Kısım Sonu---///////////////////////////////////////////////

echo "<hr>";


//////////////////////////////////////////---Birinci Kısım---///////////////////////////////////////////////


/* inheritance-kalıtım
        kalıtım yolu bir üst sınıfda veya herhangi bir yerdeki sınıftan o sınıfa ait objeler,metotlar veya 
        o sınıfa özel olan özellikler başka bir sınıfa yada methoda aktarılabilir.
        burada yapacağımız üst sınıfta bulunan id,isim,bakiye özelliklerini ve sınıf içerisinde tanımlanan metotları
        burada oluşturacağımız alt sınıf içerisine tanılmaak olacaktır.
        
        yöntem:
        class YeniSınıf extends MirasKalanSınıf{
            private $SadeceBuradaOlanÖzellik;

            yeni metotlar...

            }
        }

    */

class OzelHesap extends Hesap{
    private $VadeliBakiye;
    // yeni bir construct tanımladık
    public function __construct($x,$y,$z,$m){
        // yeni tanımlanan const içerisine zaten daha önce tanımladığımız const yapısını dahil ediyoruz
        // kalıtım ile aldığımız const içerisine bu sınıf için tanımladığımız const içindeki parametreleri verdik.
        parent::__construct($x,$y,$z);
        // yeni değişkenimiz olan $m değişkenini vadesizbakiye değişkenine veriyoruz
        $this->VadeliBakiye=$m;

        
    }
    // yeni değişkenimiz için bir erişim metodu tanımlıyoruz
    public function VadeliBakiyeGetir(){
            return $this->VadeliBakiye;
    }

    // erişim metodunun tek bir fonksiyon olarak çağırılabilmesi için eski erişim metodu ile aynı isimde bir 
    // bir erişim metodu tanımlayarak Override işlemi gerçekleştirmiş oluruz

    public function HesapBilgiGetir(){
        // $VadesizHesapBilgileri=parent::HesapBilgiGetir();
        // $VadeliBakiye=$this->VadeliBakiyeGetir();
        // return $VadesizHesapBilgileri." ".$VadeliBakiye;
        return parent::HesapBilgiGetir()." Vadeli Hesap Bakiyesi : ".$this->VadeliBakiyeGetir();
    }
}

// yeni oluşturduğumuz Ozel hesap sınıfı için obje tanımlıyoruz.
$Hesap3=new OzelHesap(3,"mike",500,1500);
// oluşturulan hesap3 için erişim
//echo $Hesap3->HesapBilgiGetir()." Vadeli Hesap Bakiyesi : ".$Hesap3->VadeliBakiyeGetir();
//echo "<hr>";

//ovveride işleminden sonra yeni metod ile  objelere erişim
echo $Hesap3->HesapBilgiGetir();
//
?>