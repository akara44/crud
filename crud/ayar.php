<?php 
$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "crude";
$tablo = "müsteri";

$baglanti = mysqli_connect($host,$kullanici,$sifre);
// if ($baglanti) {

//     echo "Bağlantı sağlandı";
// }
// else {
//     echo "Bağlantı Sağlanamadı";
// }
mysqli_select_db($baglanti,$veritabani) or die("Veri Tabanına Bağlanamadık")
?>


    