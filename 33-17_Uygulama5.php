<form action="" method="POST"   enctype="multipart/form-data">
    1. DOSYA <input type="file" name="dosya[]"> <br>
    2. DOSYA <input type="file" name="dosya[]"> <br>
    3. DOSYA <input type="file" name="dosya[]">
    <input type="submit" name="DosyaYukle" value="dosya yükle">
</form>
<?php
if($_POST){
    for($i=0;$i<count($_FILES['dosya']['name']);$i++){ 
        if($_FILES['dosya']['name'][$i]){
            $d_kontrol=1;
            // mb cinsinden dosya limiti
            $d_limit=1000*1000*1;
            $d_adi=$_FILES['dosya']['name'][$i];
            $d_boyut=$_FILES['dosya']['size'][$i];
            $d_tur=$_FILES['dosya']['type'][$i];
            $d_temp=$_FILES['dosya']['tmp_name'][$i];
            $ResimDizin="resimler/";
            if(!is_dir($ResimDizin)){
                mkdir($ResimDizin);
            }
            $d_adi=$ResimDizin.$d_adi;
            if($d_tur!="image/jpeg"){
                $d_kontrol=0;
                print("sadece jpeg dosyası yüklenebilir.");
                break;
            }
            if($d_boyut>$d_limit){
                $d_kontrol=0;
                print("dosya boyutu 1 mb den fazla olamaz");
            }
            if($d_kontrol){
                if(move_uploaded_file($d_temp,$d_adi)){
                    print("<br>");
                        print("Resim dosyası yüklendi <br>");
                        print("<img src='$d_adi' width='200' height='200'>");
                }else{
                    print $d_hata=$_FILES['dosya']['name'][$i]['error']."<br>";
                    print("dosya yüklenemedi");
                    break;

                }
            }
        }else{
            print("dosyaların tamamını seçmediniz");
            break;
        }
    }
}
?>