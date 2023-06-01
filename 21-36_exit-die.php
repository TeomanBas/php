<?php 
function merhaba(){
    print "merhaba dünya";
    exit("merhaba dünyadan sonra kodlar çalıştırılmaz çünkü exit fonksiyonu kullanıldı
    aynı zamanda exitden sonra gelen tüm kodlar çalıştırılmaz yani bu çalışan son fonksiyon olur");
    //print ("burası çalışmaz");
    
}

function merhaba1(){
    print ("Merhaba dünya") or die("die kendi başına kullanılırsa kendinden sonraki fonksiyonlar çalışmaz eğer 
    başka bir fonksiyon ile or veya and ile kullanılırsa kendinden önceki fonksiyon çalışmazise die fonksiyonu çalışır ve
    burada görülen mesaj yazdırılabilir die fonksiyonu şahsen ben 'çalış yada öl' e benzeriyorum");
    print("<br>");
    print ("burası çalışır çünkü print fonksiyonu çalıştı eğer çalışmasaydı bu kısımdan sonra  çalıştırılmadan
    programdan çıkılacaktır.");
}
merhaba1();
echo "<hr>";
merhaba();

print("burası çalışmaz ------");

?>