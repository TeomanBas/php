<form action="" method="POST"   enctype="multipart/form-data">
    <input type="file" name="dosya">
    <input type="submit" name="DosyaYukle" value="dosya yükle">
</form>
<?php
if($_POST){ 
    if($_FILES['dosya']['name']){
        $d_kontrol=1;
        // mb cinsinden dosya limiti
        $d_limit=1000*1000*1;
        $d_adi=$_FILES['dosya']['name'];
        $d_boyut=$_FILES['dosya']['size'];
        $d_tur=$_FILES['dosya']['type'];
        $d_temp=$_FILES['dosya']['tmp_name'];
        $ResimDizin="resimler/";
        if(!is_dir($ResimDizin)){
            mkdir($ResimDizin);
        }
        $d_adi=$ResimDizin.$d_adi;
        if($d_tur!="image/jpeg"){
            $d_kontrol=0;
            print("sadece jpeg dosyası yüklenebilir.");
        }
        if($d_kontrol){
            if(move_uploaded_file($d_temp,$d_adi)){
                print("<br>");
                    print("Resim dosyası yüklendi <br>");
                    print("<img src='$d_adi' width='200' height='200'>");
            }else{
                print $d_hata=$_FILES['dosya']['error']."<br>";
                print("dosya yüklenemedi");
            }
        }
    }else{
        print("dosya seçmediniz");
        
    }
}
?>