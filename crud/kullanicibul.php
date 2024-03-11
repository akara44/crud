<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Ara</title>
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
            margin-top:50px;
            width: 900px;
            height: 90px;;
            background-color:#3b4453;
            border-radius:5px;
            padding: 15px;
            text-align: center;
        }
        .logo{
   width:227.7px;
   height:75px;
}

.logo-konum{
    margin-left:540px;
    margin-bottom:-50px;
    margin-top:50px;
}
.input{ color:white;
        border:none;
        border-radius:20px;
        width:300px;
        height:35px;
        padding-top:7px;
        margin-top:13px;
        text-align:center;
        font-size:20px;
        background-color: #1e1932;
             
}

input::placeholder{

text-align:center;
font-size:20px;

}
.kaydet{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
    margin-left:82px;
    margin-top:40px;
}
.form{
    margin-left:500px;
    margin-top:100px;

}
.yazi-konum{
    margin-left:537px;
    margin-bottom:-80px;
    padding-top:30px;
}
.kontrol{
    background-color:#3b4453;
    font-size:25px;
    width: 370px;
    height: 60px;;
    text-align:center;
    color:white;
    border:none;
    border-radius:10px;
    margin-left:499px;
    margin-top:50px;


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
    margin-top:70px;
  
} 

    </style>
        <link rel="icon" href="ays.png" type="image/x-icon" />
</head>
<body>
    <div class="konum">
<div class="logo-konum">
        <img src="ays.png" alt="" class="logo">
    </div>
    <div class="yazi-konum">
    <h3 class="yazi" class="opacity-40 font-weight-normal" style="text-shadow:0px 0px 2px white">Kullanıcı Bilgilerini Kaydet</h3>
    </div>
  <div class="form">
    <form action="" method="post">


    
<input type="text" name = "id" class="input" placeholder="İd"> <br>
<input type="text" name = "isim" class="input" placeholder="İsim"> <br>

<input type="submit" value="Bul " name = "gönder" class="kaydet">
    </form>
  </div>
  </div>
  <?php 
include("ayar.php");
$conn = new mysqli($host, $kullanici, $sifre, $veritabani);
if ($_POST) {
    $no = $_POST["id"];
    $ad = $_POST["isim"];
    
    $sql = "SELECT id, ad, soyad, firmaad, tcn, vkn FROM müsteri where  id='$no' and ad='$ad'";
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     // her bir satırı döker
     while($row = $result->fetch_assoc()) {
        
echo "<table><tr><td>İd</td><td>İsim</td><td>Soyisim</td><td>Firma</td> <td>TCKN</td><td>VKN</td></tr>";
 
         echo "<td>".$row["id"]."</td>";
         echo "<td>".$row["ad"]."</td>";
         echo "<td>".$row["soyad"]."</td>";
         echo "<td>".$row["firmaad"]."</td>";
         echo "<td>".$row["tcn"]."</td>";
         echo "<td>".$row["vkn"]."</td>";
         echo "</tr>";
         echo "</table>";

    }
 } else {
     echo "<div class='kontrol'>"."Böyle Bir Kullanıcı Bulunamadı"."</div>";
 }
 }
 
 $conn->close();


 ?>
 
  <div class="cikis">
    <form action="index.php">
        <input type="submit" class="logbtn" value="Geri">
    </form>
</div>

</body>
</html>
<html>




