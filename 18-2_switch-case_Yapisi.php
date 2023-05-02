<?php
print("switch case yapısı kullanılırken case ifadesinden sonra break kullanılmalıdır kullanılmassa altında tüm
kodlar çalışacaktır.eğer tüm koşullarda sağlanmıyorsa en son default olarak tanımlanan kodlar çalışır");
print("<br>");
print("<br>");
print("<br>");

print("
switch(".'$degisken'.") {<br>
    <blockquote>case <i>Koşul 1</i>:
        <blockquote><i>Koşul 1 için yapılması gereken işlemler</i>
        </blockquote>
    </blockquote>
    <blockquote><i>break;</i>
    </blockquote>
    <blockquote>case <i>Koşul 2</i>:
        <blockquote><i>Koşul 2 için yapılması gereken işlemler</i>
        </blockquote>
    </blockquote>
    <blockquote><i>break;</i>
    </blockquote>
    <blockquote>case <i>Koşul 3</i>:
        <blockquote><i>Koşul 3 için yapılması gereken işlemler</i>
        </blockquote>
    </blockquote>
    <blockquote><i>break;</i>
    </blockquote> 
    <blockquote>default:
        <blockquote><i>Koşulların hiç biri sağlanmassa bu kısımdaki işlemler yapılır</i>
        </blockquote>
    </blockquote>
    <blockquote><i>break;</i>
    </blockquote>
}
");
print("<br>");
print("<br>");
print("<br>");




print("Aynı işlem birden fazla koşula veya değere bağlıysa koşullar ve değerler ayrı ayrı tanımlanarak hepsi için aynı yapı tanımlanması
pek uygun değildir bunun için birinci case ifadesinden sonra break kullanılmaz.");
print("<br>");
print("<br>");
print("<br>");



print("
switch(".'$degisken'.") {<br>
    <blockquote>case <i>Değer 1</i>:<br>case <i>Değer 2</i>:
        <blockquote><i>Koşul 1 için yapılması gereken işlemler</i>
        </blockquote>
    </blockquote>
    <blockquote><i>break;</i>
    </blockquote>
}
");
?>
