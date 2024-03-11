<?php
include("baglan.php");
if (isset($_POST['guncelle'])) {
   $sql = "UPDATE `müsteri` 
   SET `ad` = ?,
    `soyad` = ?,
     `firmaad` = ?,
      `tcn` = ?, 
      `vkn` = ? WHERE `müsteri`.`id` = ?";
      $dizi=[
        $_POST['ad'],
        $_POST['sad'],
        $_POST['fad'],
        $_POST['tcn'],
        $_POST['vkn'],
        $_POST['ogrno']
      ];
      $sorgu = $baglan->prepare($sql);
      $sorgu->execute($dizi);
      header("Location:listele.php");
}

$sql = "SELECT *FROM müsteri WHERE id = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['musteri'] 
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="ays.png" type="image/x-icon" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$satir["ad"]." ".$satir["soyad"]." "?> Güncelleme</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
       .logo{
   width:227.7px;
   height:75px;
}

.logo-konum{
    margin-left:570px;
    margin-bottom:-50px;
    margin-top:50px;    
}
.yazi-konum{
    margin-left:394px;
    margin-bottom:-80px;
    padding-top:15px;
}
.loginput1{
    border:none;
    border-radius: 30px;
    background-color: #1e1532;
    color:white;
    text-align:30px;
    text-align:center;
}
.konum{
   margin-left: 300px;
}
.konumm{
   margin-left: 540px;
}
.btn{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
    margin-left:-55px;
    margin-top:135px;
} 
.logbtn{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
    margin-top: 11px;

} 
</style>
</head>
<body>
    
<div class="logo-konum">
        <img src="ays.png" alt="" class="logo">
    </div>
     <header>
         <div class="container p-5">
             <div class="row">
                 <div class="col">
                     <h1 class="yazi-konum">Tüm Müşteriler</h1>
                 </div>
             </div>

     </header>
    <main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3" >
            <input   type="hidden" name="ogrno" value="<?=$satir['id']?>">
            <div class="col-6">
                <label for="ad" class="form-label">İsmi</label>
                <input type="text" class="form-control loginput1" name="ad" value="<?=$satir['ad']?>">
            </div>
            <div class="col-6">
                <label for="sad" class="form-label">Soyadı</label>
                <input type="text" class="form-control loginput1" name="sad" value="<?=$satir['soyad']?>">
            </div>
            <div class="col-6">
                <label for="sinif" class="form-label">Firma İsmi</label>
                <input type="text" class="form-control loginput1" name="fad" value="<?=$satir['firmaad']?>">
            </div>
            <div class="col-6">
                <label for="dtarih" class="form-label">TCN</label>
                <input type="text" class="form-control loginput1" name="tcn" value="<?=$satir['tcn']?>">
            </div>
            <div class="col-6">
                <label for="dtarih" class="form-label konum konumm">VKN</label>
                <input type="text" class="form-control loginput1 konum" name="vkn" value="<?=$satir['vkn']?>">
            </div>
            <button type="submit" name="guncelle" class="btn">Güncelle</button>
        </form>
    </div>
    </main>
    <footer></footer>
    <div class="cikis">
    <form action="listele.php">
        <input type="submit" class="logbtn" value="Geri">
    </form>
</div>
</body>
</html>
 