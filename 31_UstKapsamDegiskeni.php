<?php 
$pi=3.14;
function DaireAlanCevre($r){
    global $pi;
    $Alan =$pi*($r^2);
    $Cevre=2*$pi*$r;
    print("alan : ".$Alan." | "."cevre : ".$Cevre);
}

DaireAlanCevre(101);

?>