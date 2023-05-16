<?php 
class Araba{
    
    
    public $Renk,$Model,$Marka,$Hiz,$Guc ;
    private $SaseNo;

    function __construct($Rnk,$Mdl,$Mrk,$Hz,$Gc,$SsNo){
        $this->Renk=$Rnk;
        $this->Model=$Mdl;
        $this->Marka=$Mrk;
        $this->Hiz=$Hz;
        $this->Guc=$Gc;
        $this->SaseNo=$SsNo;
    }

    function Degerler($Deger=""){
        switch($Deger){
            case "Renk":print($this->Renk);break;
            case "Model":print($this->Model);break;
            case "Marka":print($this->Marka);break;
            case "Hiz":print($this->Hiz);break;
            case "Guc":print($this->Guc);break;
            default:print("değer tanımlı değil");
        }
    }
    function calis(){
        echo "araba çalıştı";
    }
    function dur(){
        echo "araba durdu";
    }


}

?>