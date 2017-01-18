<?php
$sunucuAdres    = "localhost";
$kullaniciAdi   = "root";
$kullaniciSifre = "";
$vtAdi          = "rmp";

$link = new mysqli($sunucuAdres,$kullaniciAdi,$kullaniciSifre,$vtAdi);
//mysqli_connect($sunucuAdres,$kullaniciAdi,$kullaniciSifre,$vtAdi);

if($link->connect_errno) {
	echo "Veri Tabanı ile Bağlantı Kurulamadı !".mysqli_connect_error().PHP_EOL;
	exit;
}
 /* change character set to utf8 */
if (!$link->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $mysqli->error);
    exit();
} 

?>