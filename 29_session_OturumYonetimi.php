<?php
print("session");print("<br>");
print("kullanıcılara ait bilgiler sayfalar arasında  taşınmak istendiğinde cookie kullanılarak veya adresin sonuna eklenerek her sayfaya taşınması gerekir bu yöntem hem zahmetli 
hemde çok güvenli değildir session kullanılarak kullanıcıya ait bilgileri sayfalar arası taşınmak kullanıcıya özel  sayfalar oluşturmak daha kolay ve güvenlidir.session yönteminde kullanıcıya ait bilgiler istemci yerine sunucuda tutulmaktadır");
print("<br>");
print("çalışma şekli : kullanıcı siteyi ziyaret ettiğinde kullanıcı için bir oturum açılır
<br> sunucu üzerinde kullanıcı için üretilen id değerine  göre bir dosya oluşturulur.
<br> sayfalar arası taşınmak istenen bilgiler oturum boyunca sunucuda açılan bu dosyada tutulur.
<br> kullanıcı siteyi terk ettiğinde veya php yardımıyla oturum sonlandırıldığında kullanıcı için oluşturulan dosya silinir");
print("<br>");
print('session_start() : oturum oluşturmak için kullanılır ve sayfanın en başında kullanılması gerekmektedir.kullanıcı tarafından oluşturulan bir oturum yok ise
 oturum açacak ve sunucuda kullanıcı için bir dosya oluşturacaktır.oturum açılmış ise yeni oturum açmadan eski oturumu devam ettirecektir');

 print('session_id() : oturum için id numrası tanımlamak veya tanımlanan id numarasını okumak için kullanılır tanımlı olan id numarası alınacaksa parametre verilmeden kullanılmalıdır.
 oluşturulacak oturum için id tanımlanacaksa session_start() fonksiyonundan önce istenilen id numarası parametre olarak (session_id("12345") verilerek kullanılmalıdır.');

 print('$_SESSION[]:açılan oturum için bilgiler (değişkeneler oluşturmak veya okumak için kullanılır.oturum için eklenen bilgiye kullanıcının ziyaret ettiği her sayfadan ulaşılabilir.)');
print("<br>");
 print('session_destroy() açık olan oturumu sonlandırmak için kullanılır oturumu kapatmak istediğimiz yerde session_destroy() yazmak yeterlidir.
 <br> oturum için bir değişkenin tanımlanıp tanımlanmadığını öğrenmek için isset fonksiyonu kullanılabilir ve değişkeni yok etmek için unset fonksiyonu kullanılabilir.');
 

?>