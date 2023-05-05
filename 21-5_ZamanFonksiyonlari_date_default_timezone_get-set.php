<?php
// varsayılan ayarlı saat dilimini getirir.
$date_def= date_default_timezone_get();
print($date_def);print("<br>");
$date=date("w");
print($date);print("<br>");
// tüm zaman işlevlerinin kullandığı saat dilimini ayarlar
date_default_timezone_set('Asia/Istanbul');
$date_def= date_default_timezone_get();
print($date_def);print("<br>");
$date1 = date("w");
print($date1);print("<br>");

date_default_timezone_set('America/Los_Angeles');
$date_def= date_default_timezone_get();
print($date_def);print("<br>");
$date2 = date("w");
print($date2);print("<br>");

?>