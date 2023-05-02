<?php
$hava_sicakligi=15;
if ($hava_sicakligi>=35){
    print("hava sıcak");
}elseif ($hava_sicakligi>=25 AND $hava_sicakligi<35){
    print("hava sıcaklığı normal");
}elseif ($hava_sicakligi>=15 && $hava_sicakligi<25){
    print("hava ılık");
}else{
    print("hava soğuk");
}
?>