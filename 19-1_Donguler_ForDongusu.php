<?php 
print("Dongu Deyimleri");
print("<br>");
print("For Döngüsü");
print("<br>");
print("belirli bir miktarda tekrarlanması istenilen durumlarda kullanılır.Dönünün tekrar sayısı sayaç 
değişkenine göre gerçekleştirilir.sayaç istenilen sayıda başlatılır istenilen sayıda döngü sonlandırılır
çok fazla kod satırından oluşan işlemler daha az sayıda kod ile yapılabilir.");
print("<br>");
print("for(sayac değişkeni=başlangıç değeri;sayaç değişkeni=bitiş değeri;degişim miktarı){ ... }");
print("<br>");
print("<br>");
print("<table border=".'"2px"'."><tr><td>x</td>");
for ($x=1;$x<=10;$x++){
    print("<td>".$x."</td>");
}
print("</tr>");
for($i=1;$i<=10;$i++){
    print("<tr><td>".$i."</td>");
    for($j=1;$j<=10;$j++){
        print ("<td>".$i*$j."</td>");
    }
    print("</tr>");
}
print("</table>")

?>