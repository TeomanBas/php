<?php 
print("eğer bir dosya birden çok kez include edilirse her biri sayfada görüntülecektir.bunun olmaması için
include_once() fonksiyonu ile include edilebilir.");
print("<br>");
include_once("KullaniciDosyalari/yazi.t");
include_once("KullaniciDosyalari/yazi.t");
include_once("KullaniciDosyalari/yazi.t");

?>