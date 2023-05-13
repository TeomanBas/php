<?php 
echo 'php ile mysql bağlantısı kurulmak istendiğinde phpmyadmin kullanılabilir.php bağlantısı için mysql.ini ve phpdosyalarının 
içerinde bulunan config.inc.php dosyası dünzelenmelidir.<br>
mysql kullanıcı bilgileri $cfg["Servers"][$i]["user"]="kullanıcı_adi" ve $cfg["Servers"][$i]["user"]="password" bilgileri değiştirilmelidir.<br>
$cfg["Servers"][$i]["host"]="database_ip"; gibi tanımlamaların yapılması gereklidir.<br>
$cfg["Servers"][$i]["AllowNoPassword"]="true/false"; :bu kısım phpmyadmin panelinde boş şifre ile giriş yapılıp yapılmayacağını belirlediğimiz değişkendir.
';
echo "<hr>";
echo "mysql sunucu bağlantısı";
echo " bir veritabanı bağlantı başlangıcı ve bitişi sırasıyla ( veritabanı_bağantısı -> veri_tabanı_seçimi -> sql_ifadesinin_yazılması ->sql_işleminin sonucuna göre işlemler tanımlanmalıdır ->bağlantı kapatılmalıdır ) şeklinde olmalıdır";
echo 'ornek_baglanti: $baglanti=mysqli_connect(sunucu,kullanici_adi,şifre,yeni_bağlanti)';
echo 'sunucu sunucu:port_no şeklindede olabilir.';
echo 'yeni_baglanti: mysql_connect ifadesi aynı değerlerle tekrar çalıştırılırsa mysql yeni bağlantı oluşturmadan aynı bağlantıyı kullanır.bu parametre kullanıldığında açık olan bağlantı olsa bilr yeni bir bağlantı oluşturulacaktır.parametrenin kullanım zorunlulluğu yoktur.';

echo "<hr>";
echo "bağlantı kurulan mysql veritabanı üzerinde sql ifadelerini çalıştırabilmemiz için mysql_query ifadesi kullanılır";
echo 'sonuc=mysqli_query(""sql_ifadesi","bağlantı_değişkeni")';
echo 'sql_ifaesi : çalıştırılmak istenen sql ifadesidir.';echo "<br>";
echo 'bağlantı_değişkeni : mysql_connect fonksiyonunun atandığı bağlantı değişkenidir.';
echo '<hr>';

// mysql bağlantısı
$baglanti= mysqli_connect('127.0.0.1:3306', 'root','', 'phpmyadmin');
// kullanılan bağlantı türü ve ana bilgisayar sunucusunun adı gibi ana bilgisayar hakkında bilgi almak için kullanılır.
printf("Success... %s\n", mysqli_get_host_info($baglanti));
echo "<br>";
// mysql_select_db("db_name","bağlantıİsmi") : database seçmek için kullanılır bağlantı başarılı ise true değilse false döner
// mysqli_error(db_name) oluşan hataları döner
//mysqli_select_db($baglanti,"phpmyadmin") or die("bağlantı başarısız".mysqli_error($baglanti));
echo '<hr>';
// database oluşturma.
echo 'mysqli_query() ile veritabanına sorgu gönderilebilir.';
// mysqli_query($baglanti,'CREATE DATABASE okul') or die ("veritabanı oluşturulamadı".mysqli_error($baglanti));
echo '<hr>';
echo "<br>";





?>