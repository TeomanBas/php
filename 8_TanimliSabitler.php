<?php
print ("<h1>ÇEVRESEL DEĞİŞKENLER</h1>");
print __LINE__; // satir no
print "<hr>";
print __FILE__; // dosya adi
print "<hr>";
print __DIR__; // dosyanin bulundugu dizin adi
print "<hr>";
print PHP_VERSION;
print "<hr>";
print PHP_OS; // web sunucusunun çalıştığı işletim sistemini verir
print "<hr>";
// $_SERVER SUPER GLOBAL DEĞİŞKEN DİR
print $_SERVER['HTTP_USER_AGENT']; // sayfayı ziyaret eden kullanıcı tarayıcı ve işletim sistemi bilgilerini verir.
print "<hr>";
print $_SERVER['SERVER_NAME']; // server ip adresini verir
print "<hr>";
print $_SERVER['HTTP_REFERER']; // bulunduğu sayfaya hangi sayfadan geldiği bilgisini verir.
print "<hr>";
print $_SERVER['HTTP_HOST']; // host adresini yada adını verir.
print "<hr>";
print $_SERVER['SERVER_ADDR']; //sunucu ip adresini verir.
print "<hr>";
print phpinfo(); // tüm çevresel değişkenlere php bilgi fonksiyonu ile ulaşılabilir
// getenv fonksiyonu bu değişkenlere erişmemizi sağlar.
print "<hr>";
print getenv("REMOTE_PORT");
print "<hr>";
print getenv("DOCUMENT_ROOT");
?>