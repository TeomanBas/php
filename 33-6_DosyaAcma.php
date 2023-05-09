<?php 
echo "dosyaların içerdiği bilgileri kullanmak için veya içeriğini değiştirmek için öncelikle dosyayı açmak gerekiyor.Dosyayı 
açmak için  fopen() fonksiyonu kullanılır paramtre olarak açılacak dosyanın adı ve açma türü verilir";
echo "<br>";
echo "açılan dosya ile ilgili işlemleri yapabilmek için fonksiyon bir değişkene atanmalıdır. dosya açıldığında  fonksiyon tamsayı türünde
açılmadığında fonksiyon false döner .dosyanın açılabilmesi için yeterli erişim izinlerinin sağlanması gerekir.";
echo "<br>";
echo "Kullanım şekli : fopen(dosya_ismi,açma_türü)";
echo "<br>";
echo "dosya açma türleri";echo "<br>";
echo "r : dosya okuma modunda açar ve dosya başına konumlanır";echo "<br>";
echo "r+ : dosyayı hem okumak hemde yazmak için açar ve dosya başında konumlanır";echo "<br>";
echo "w : dosyayı sadece yazma modunda açar dosya olmasa bile yenisi oluşturulur.";echo "<br>";
echo "w+ : w ile aynı özelliğe sahiptir aynı zamanda okuma da yapar";echo "<br>";
echo "a : dosyayı yazma modunda açar dosya varsa yazmaya dosyanın sonundan devam eder.Dosya yoksa oluşturulur.";echo "<br>";
echo "a+ : a ile aynı özelliğe sahiptir aynı zamanda okumayada izin verir.";echo "<br>";
echo "x : dosyayı oluşturur ve sadece yazmak için açar ve dosya başına konumlanır dosya varsa başarısız olur ve fopen fonksiyonu false 
değer döndürür.";echo "<br>";
echo "x+ : dosya oluşturulur ve hem okumak hemde yazmak için açar ve dosya başına konumlanır dosya varsa başarısız olur ve fopen fonksiyonu false değer döndürür";echo "<br>";
echo "dosya açıldıktan sonra kapatılması gerekmektedir dosya kapatmak için fclose fonksiyonu kullanılır ve parametre olarak dosya adını alır";
echo "<hr>";



?>