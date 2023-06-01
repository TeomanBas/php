<?php
# array_merge() - dizilerin birleştirilmesi
$Dizi1=array("A", "B", "C");
$Dizi2=array(1,2,3);
echo "array_merge() - dizilerin birleştirilmesi";echo "<br>";
$Birlesim1=array_merge($Dizi1,$Dizi2);
print_r($Birlesim1);echo "<br>";
# indis sıralarının değişmemesi için + kullanılabilir
$Dizi1=array(0 =>"X", 2=>"Y", 4=>"Z");
$Dizi2=array(1 =>"X1", 3=>"Y1", 5=>"Z1");
$Birleşim1=$Dizi1 + $Dizi2;
print_r($Birleşim1);
echo "<br>";
echo "<br>";
echo "<br>";


# array_push() - deger ekleme
echo "array_push() - deger ekleme";
echo "diziye değer eklemek için push metodu kullanılabilir ancak deger[1]=deger  şeklinde bir eklemede
yapılabilir böyle yapılır öyle bir dizi veya değişken yoksa bile değer eklenmiş olur push metodu ile ekleme
yapılamazsa hata döner program o kısımda kalır";
echo "<br>";
$Dizi1=array("A", "B", "C");
echo "<br>";
array_push($Dizi1,"eklenen deger1","eklenen deger2");
$Sonuc=array_push($Dizi1,"eklenen deger3","eklenen deger4");
print_r("array_push değer eklenirse son eklenen elemanın kaçıncı eleman olduğunun sayısını döndürür ".$Sonuc);
echo "<br>";
print_r($Dizi1);
echo "<br>";
$Dizi1[21]="yirmibirnci değer";
print_r($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";


# array_shift()- ilk değeri deger silme
print("array_shift dizinin ilk elemanını siler ve dizi indis değerleri yeniden düzenlenir");
echo "<br>";
$Dizi1=array("A", "B", "C");
array_shift($Dizi1);
print_r($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";

# array_unshift()- dizi değişkeninin en başına değer ekleme
print("array_unshift dizi değişkeninin elemanrının en başına ilk elemanın önüne değer ekler");
echo "<br>";
$Dizi1=array("A", "B", "C");
array_unshift($Dizi1,"ilk değer");
print_r($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";

# array_sum()- sayısal değerler toplamı
print("array_sum dizinin elemanları içerisinde sayısal olan değerlerin toplamını verir eğer tüm
değerler string bir ifade sonuç sıfır olacaktır.");
echo "<br>";
$Dizi1=array("A", "B", "C","1","2","3","asdf33");
$Dizi2=array("A", "B", "C");
$Toplam=array_sum($Dizi1);
print_r($Dizi1);
print ("sayıların toplamı :".$Toplam);
echo "<br>";
print_r($Dizi2);
$Toplam=array_sum($Dizi2);
print ("sayıların toplamı :".$Toplam);
echo "<br>";
echo "<br>";
echo "<br>";

# in_array()- dizi değişkeninin içinde belli bir değikeni aramaya yarar
print("dizi değişkenlerinin içerisinde bir elemanı arayabiliriz eğer eleman var ise true değilse false döner. ");
$Dizi1=array("A", "B", "C",1);
$a="değişken mevcut";
$b="değişken mevcut değil";
$sonuc=in_array("A",$Dizi1,true);
print("in_array döndürdüğü veri tipi : ".gettype($sonuc));
echo "<br>";
print($sonuc==true? $a:$b);
echo "<br>";
echo "<br>";
echo "<br>";

# array_search() - dizilerin birleştirilmesi
$Dizi1=array("A", "B", "C");
print("array_search() bir dizi içerisinde bir elemean değerini arar eğer eleman var ise elemanın indis numarasını 
bulunmazsa false veya boş döner.");
$a="değişken mevcut";
$b="değişken mevcut değil";
$sonuc1=array_search("C",$Dizi1);
$sonuc2=array_search("D",$Dizi1);
echo "<br>";
print($sonuc==true? $a:$b);
echo "<br>";
print("array_search döndürdüğü veri tipi : ".gettype($sonuc1)."
 değişken var ise dönen değer indis : ".$sonuc1." eğer yok ise dönene değer : ".$sonuc2);
echo "<br>";
echo "<br>";
echo "<br>";

# array_slice() - bir dizi değişkeninin belirli bir bölümünü alır
$Dizi1=array("A", "B", "C","D","E","F","G","H","K","L","M","N");
print("array_slice() bir dizi içerisindeki belli bir indis değeri arasındaki elemanları almak için kullanılır
array_slice(dizi_değişkeni,indis_başlangıç,indis_bitiş,indexi_koruma) alınan değerlerin index numaralarını
koruması isteniyorsa true yapılabilir değilse false yapılabilir ve index değerleri yeniden oluşturulur.");
print("<br>");
$Sonuc=array_slice($Dizi1,3,7,True);
print_r($Sonuc);
print("<br>");
$Sonuc=array_slice($Dizi1,3,7,False);
print_r($Sonuc);
echo "<br>";
echo "<br>";
echo "<br>";

# sort() -değerlerin büyükten küçüğe sıralanması
print("değerlerin küçükten büyüğe sıralanması için kullanılabilir");
$Dizi1=array("A","K","L","M","B","E","F","C","D","G","H","N");
sort($Dizi1);
echo "<br>";
print_r($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";

# rsort() -değerlerin büyükten küçüğe sıralanması
print("değerlerin büyükten küçüğe sıralanması için kullanılabilir");
$Dizi1=array("A","K","L","M","B","E","F","C","D","G","H","N");
rsort($Dizi1);
echo "<br>";
print_r($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";

# shuffle() -değerlerin rasgele sıralar
print("değerlerin rasgele sıralanması için kullanılabilir");
$Dizi1=array("A","K","L","M","B","E","F","C","D","G","H","N");
shuffle($Dizi1);
echo "<br>";
print_r($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";

# var_dump() - tüm değişkenler için detaylı bilgi almak için kullanılabilir.
print("değişken için detaylı bilgi almak için kullanılabilir");
echo "<br>";
$Dizi1=array("A","K","L","M","B","E","F","C","D","G","H","N",1,2,3,4,66,22,55,9766,45.6,22.325,0.23);
var_dump($Dizi1);
echo "<br>";
echo "<br>";
echo "<br>";

# range() Sayısal dizi oluşturmak
$Sayi =range(0,100,11); echo "<br>";
print("bir değikenin içerisine range fonksiyonu bir çok sayı atabiliriz.range() fonksiyonuda bir dizi 
değişkeni döndürüryor.");
print_r($Sayi);
echo "<br>";
echo "<br>";
echo "<br>";

# sizeof() bir dizinin boyutu,büyüklüğü
$Dizi1=array("A","K","L","M","B","E","F","C","D","G","H","N");
print("dizinin  eleman sayısını veriyor Bu işlev count() işlevinin takma adıdır. ");
echo "<br>";
print(sizeof($Dizi1)." dizinin eleman sayısı");
echo "<br>";
echo "<br>";
echo "<br>";

# explode() bir dizi değişkenini belirli bir ayırıcıya göre ayırır ve bunu bir dizi olarak döndürür
$Cumle=Array("burası bir cümledir,bu cümle virgul karakterlerine göre ayrılacaktır, bunu explode fonksiyonu ile gerçekleştireceğiz");
$CumleParcalari=explode(",",$Cumle[0]);
print_r($CumleParcalari);
echo "<br>";
echo "<br>";
echo "<br>";


#list() dizi elemanlarının sırasıyla belirli değişkenlere atanmasını sağlar
$meyve=Array(
    "elma ağacı" , "elma",
    "şeftali ağacı" , "şeftali",
    
);
list($agac,$meyvesi)=$meyve;
echo "$agac ının meyvesi $meyvesi dir";
echo "<br>";
echo "<br>";
echo "<br>";


# each() dizinin ilk anahtar ve değer çiftini döndürür.php 7 de kullanımdan kaldırıldı
// $ilkmeyve=each($meyve);
// print_r($ilkmeyve); 
// echo "<br>";
// echo "<br>";
// echo "<br>";


# array_key_exists bir değerin veya indisin belirtilen dizide olup olmadığını kontrol eder
# dizide key value yapısı olması lazım ve sadece key içerisinde arama yapar
$meyve=Array(
    "elma ağacı" => "elma",
    "şeftali ağacı" => "şeftali",
    
);
$deger="elma ağacı";
$degerkontrolcu=array_key_exists($deger,$meyve);
if($degerkontrolcu==1){
    echo "$deger değer var";
}else{
    echo "$deger değer yok";
}
echo "<br>";
echo "<br>";
echo "<br>";

# array_count_values() gir dizide bir değerden kaç tane olduğunu ve değeri döndürür.
$hello=array(1,"hello",1,"hello",2,"dünya",3,"merhaba",2,"world");
print_r(array_count_values($hello));



?>