<?php
include("baglan.php");
$sql = "SELECT *FROM müsteri WHERE id = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['musteri'] 
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?=$satir["ad"]." ".$satir["soyad"]." "?> Detaylar</title>
     <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    text-align: center;

}
.card{
    color: black;
    font-size: 25px;
    text-align: center;
    background-color:lightgray;

}
.logbtn{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
    margin-top: 40px;

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
                     <h1 class="yazi-konum"><?=$satir["ad"]." ".$satir["soyad"]." "?>Detaylar</h1>
                 </div>
             </div>

     </header>
     <main>
        <div class="container p-1">
            <div class="row">
                <div class="col">
                <div class="card">
  <div class="card-body">
    <h1 class="card-title text-black"><?=$satir["ad"]." ".$satir["soyad"]?></h1>
    <p class="card-subtitle mb-2 text-body-secondary"><?="ID:".$satir["id"]?></p>
    <p class="card-text"><?="Firma İsmi:".$satir["firmaad"]?></p>
    <p class="card-text"><?="TC Kimlik Numarası:".$satir["tcn"]?></p>
    <p class="card-text"><?="Vergi Kimlik Numarası:".$satir["vkn"]?></p>
  </div>
</div>
                </div>
            </div>
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