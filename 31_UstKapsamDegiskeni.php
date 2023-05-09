<?php 
$pi=3.14;
$mesaj="hesapama tamamlandı";

/* bir fonksiyon tanımlarken dışarıki değişkene doğrudan erişemeyiz 
   dışarıdaki değişkene erişmek için fonksiyon içerisinde global yada $GLOBALS['değişken_adı']
    şeklinde erişmemiz gereklidir
 */
function DaireAlanCevre($r){
    global $pi;
    $Alan =$pi*($r^2);
    $Cevre=2*$pi*$r;
    print("alan : ".$Alan." | "."cevre : ".$Cevre);
    print("<br>");
    echo $GLOBALS['mesaj'];
    // aşağıdaki şeklildeki gibi bir kullanım hata verecektir.
    echo $mesaj;
}

DaireAlanCevre(101);

?>