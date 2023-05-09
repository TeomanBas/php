<?php 
echo "is_readeble : bir dosyanın okunabilir olup olmadığını kontrol eder";echo "<br>";
echo "is_writable : bir dosyanın yazılabilir olup olmadığını kontrol eder";echo "<br>";
echo "is_executable : bir dosyanın çalıştırılabilir olup olmadığını kontrol eder";echo "<br>";
echo "filesize : dosyanın boyutunu byte türünden vermektedir.";echo "<br>";
echo "fileatime : dosyaya son erişim zamanını vermektedir.";echo "<br>";
echo "filemtime : bir dosyanın son değişiklik zamanını vermektedir.";echo "<br>";
echo "dönen değer true ise  dosya mevcut ve okunabilir, yazılabilir, çalıştırılabilir demektir false 
dosya mevcut olmayabilir veya dosya okuma,yazma ve çalıştırma işlevleri için uygun değil anlamına gelir.";echo "<br>";

echo "<hr>";
if(is_readable("KullaniciDosyalari/yazi.t")){
    echo "dosya okunabilir";
}else{
    echo "dosya okunamaz";
}
echo "<hr>";
if(is_writable("KullaniciDosyalari/yazi.t")){
    echo "dosya yazılabilir";
}else{
    echo "dosya yazılamaz";
}
echo "<hr>";
if(is_executable("KullaniciDosyalari/yazi.t")){
    echo "dosya çalıştırılabilir";
}else{
    echo "dosya çalıştırılamaz";
}
echo "<hr>";
$dosya="KullaniciDosyalari/yazi.t";
$zaman=date("F d Y H:i:s",fileatime($dosya));
echo "dosyaya son erişim zamanı : ".$zaman;
echo "<hr>";
$zaman=date("F d Y H:i:s",filemtime($dosya));
echo "dosyaya son değişiklik zamanı : ".$zaman;

?>