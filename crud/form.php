<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Bilgileri</title>
    <link rel="icon" type="image/png" sizes="32x32" href="ays.ico">
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
.input{ 
    color:white;
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
.konum{

    margin-left:500px; 
    margin-top:100px;
}
.btn-konum{
    margin-left:82px;
    margin-top:50px;
}
.kaydet{
    border:none;
    border-radius:30px;
    width:142.42px;
    height:42px;
    background-color:  lightblue;
    color:white;
    font-size:15px;
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
.yazi-konum{
    margin-left:537px;
    margin-bottom:-80px;
    padding-top:30px;
}
.konumm{
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
  
} 


    </style>
</head>
<body>
    <div class="konumm">
    <div class="logo-konum">
        <img src="ays.png" alt="" class="logo">
    </div>
    <div class="yazi-konum">
    <h3 class="yazi" class="opacity-40 font-weight-normal" style="text-shadow:0px 0px 2px white">Kullanıcı Bilgilerini Kaydet</h3>
    </div>
    <div class="konum">
<form action="ekle.php" method="post">
    <input type="text" name="ad" placeholder="İsim"class="input" id="input-kont"><br>
    <input type="text"  name="soyad" placeholder="Soyisim"class="input" id="input-kont"><br>
    <input type="text"  name="firma" placeholder="Firma İsmi"class="input" id="input-kont"><br>
   <input type="text"  name="tcn" placeholder="TCKN"class="input" id="input-kont"><br>
<input type="text"  name="vkn" placeholder="VKN" class="input" id="input-kont"><br>
<div class="btn-konum">
    <input type="submit" value="Kaydet" class ="kaydet"  id="btn">
    </div>
    </div>
</form>
</div>
<div class="cikis">
    <form action="index.php">
        <input type="submit" class="logbtn" value="Geri">
    </form>
</div>

 

</body>
