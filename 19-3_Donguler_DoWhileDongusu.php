<?php
print("do while yapısında şart gerçekleşmesede do içerisinde kodlar bir kere çalıştırılacaktır.
kullanıcıdan bilgi istendiği durumlarda sıklıkla kullanılır.Kullanıcıya bir soru yöneltmek istendiğinde
kullanıcının daha önce vermiş olduğu bir cevap olmadığı için döngü bir kez çalışmak zorundadır. ");
print("<br>");
print("do {");
print("<br>");
print("Gerçekleşecek işlemler");
print("<br>");
print("}while(şart)");
print("<br>");
print("<br>");
print("<br>");

$i=1;
$toplam=0;
do{
    $toplam+=$i;
    if($i%10==0){
        echo "Sayaç Değeri : $i için ";
        echo "Toplam : $toplam <br>";
    }
    $i++;
}while($i<=100);

if($i>100){
    echo " Sayaç : $i ve 100 den büyük olduğu için çalışmayı durdurdu.";
}
?>