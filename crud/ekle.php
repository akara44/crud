<?php 
include("ayar.php");
echo "<br>"; 
$ad =$_POST['ad'];
$soyad =$_POST['soyad'];
$firma =$_POST['firma'];
$tcn =$_POST['tcn'];
$vkn =$_POST['vkn'];
echo "<table><tr><td>İsim</td><td>Soyisim</td><td>Firma</td> <td>TCKN</td><td>VKN</td></tr>";
echo "<td>".$ad."</td>";
echo "<td>".$soyad."</td>";
echo "<td>".$firma."</td>";
echo "<td>".$tcn."</td>";
echo "<td>".$vkn."</td>";
echo "</tr>";
echo "</table>";




$ekle=mysqli_query($baglanti,"INSERT INTO $tablo(ad,soyad,firmaad,tcn,vkn)
values('$ad','$soyad','$firma','$tcn','$vkn')");
if ($ekle) {
    echo "<div>"."Ekleme İşlemi Başarılı"."</div>";
}
else{
    echo "Ekleme İşlemi Başarısız";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="ays.png" type="image/x-icon" />
    <style>
body {
    margin: 0;
    font-family: Poppins, Helvetica, "sans-serif";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color:lightgray;
    text-align: left;
    background-image: url('download.png');
     background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
       }
 table{
    font-size:25px;
    margin-left:227px;
    margin-top:148px;
    width: 900px;
    height: 90px;;
    background-color:#3b4453;
    border-radius:5px;
    padding: 15px;
    text-align: center;
        }
div{
    font-size:25px;
    margin-left:536px;
    margin-top:100px;
        }
        .logo{
   width:227.7px;
   height:75px;
}

.logo-konum{
    margin-left:540px;

    margin-top:-458px;
}
        
        .konum{
    margin-left:30px;
}
.logbtn{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
  margin-left: -535px;
  margin-top: 323px;
} 

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Kontrol</title>
    <link rel="icon" type="image/png" sizes="32x32" href="ays.ico">
</head>
<body>
    <div class="konum">
<div class="logo-konum">
        <img src="ays.png" alt="" class="logo">
</div>
</div>
<div class="cikis">
    <form action="form.php">
        <input type="submit" class="logbtn" value="Geri">
    </form>
</div>

</html>