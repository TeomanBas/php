<?php 
print("<h1>DOSYA İŞLEMLERİ</h1>");
print("kullanıcıdan alınan dosyalar veritabanı yerine dosya olarak ta tutulabilir.
Dosyalar üzerinde okuma silme değiştirme gibi işlemlerde gerçekleştirilebilir. Dosyayı sayfanın herhangi bir yerinde
görüntülemek için include fonksiyonu kullanılabilir.eğer host ettiğimiz dosyaların araların kullanıcıların
görmelerini istemediğimiz örneğin diğer kullanıların yüklediği dosyalar olabilir bunların 
şans eseri de olsa dizinlenmesi durumunda tarayıcıların bunu görüntülememeasini sağlamak için 'inc' dosyas uzantısı olarak
kaydedilmeleri gereklidir.daha sonra '.htaccess' düzenlenmesi gereklidir inc dosyaları için örnek bir config yapısı aşağıda <br> ");
print('
<Files ~"\.inc$">
Order allow,deny
Deny from all
</Files>
');
print("<br>include edilen dosya düz metin içeriyorsa içeren metin doğrudan sayfaya yazdırılacak.dosya içeriği html etiketleri ve php komutları içeriyorsa etiketler ve komutlar
yorumlanarak sonucu sayfaya yazdırılacaktır.");
print("<hr>");

include("KullaniciDosyalari/yazi.inc");
print("<hr>");

include("KullaniciDosyalari/yazi.t");

print("<hr>");
print("içinde .htaccess olan dosya internel Server Error hatası verecektir. ancak dosyalari buradan include edersek içerikleri gösterilecektir.")


?>