<?php

$v_sunucu="localhost";
$v_kullanici="root";
$v_sifre="";
$v_ad="kaydolma";
$baglan=mysqli_connect($v_sunucu,$v_kullanici,$v_sifre,$v_ad);
if(!$baglan){
    
    die("Veritabanı bağlantısı başarısız".mysqli_connect_error());
}

	

?>