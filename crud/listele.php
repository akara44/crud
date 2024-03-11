<?php
include("baglan.php");
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `müsteri` WHERE `müsteri`.`id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:listele.php');
 
}
$sql = "SELECT *FROM müsteri";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
?>
<!DOCTYPE html>
 <html lang="tr">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tüm Müşteriler</title>
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
.table{
    background-color:#3b4453;
    font-size:25px;
    text-align:center;
    color:white;
    border:none;
    border-radius:5px;
}
.logbtn{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
    margin-top:24.5px;
  
} 
</style>
<link rel="icon" href="ays.png" type="image/x-icon" />
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
             <div class="row mt-4">
                 <div class="col p-4">
                     <table class="table table-hover">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>Ad</th>
                                 <th>Soyad</th>
                                 <th>İşlem</th>
                             </tr>
                         </thead>
                         <tbody>
                            <?php
                            while ($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) {
                                # code...
                            
                            ?>
                             <tr>
                                 <td><?=$satir['id']?></td>
                                 <td><?=$satir['ad']?></td>
                                 <td><?=$satir['soyad']?></td>
                             <td>
                                     <div class="btn-group p-2">
                                         <a href="detay.php?musteri=<?=$satir['id']?>" class="btn btn-success">Detay</a>
                                         <a href="güncelle.php?musteri=<?=$satir['id']?>" class="btn btn-secondary">Güncelle</a>
                                         <a href="?sil=<?=$satir['id']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a>
                                     </div>
                                 </td>
                             </tr>
                        <?php }?>
                         </tbody>
                     </table>
                 </div>
             </div>
         </div>
     
     </main>
     <footer></footer>
     <div class="cikis">
    <form action="index.php">
        <input type="submit" class="logbtn" value="Geri">
    </form>
</div>

 </body>
 </html>