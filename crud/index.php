<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KBS|Kullanıcı Bulma Sistemi</title>
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
.kaydet{
    border:none;
    border-radius:30px;
    width:270px;
    height:57px;
    background-color: lightblue;
    color:white;
    font-size:20px;
    margin-left:520px;
    margin-top:150px;
}
.kaydet1{
    border:none;
    border-radius:30px;
    width:270px;
    height:57px;
    background-color: lightblue;
    color:white;
    font-size:20px;
    margin-left:520px;
    margin-top:30px;
    
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
.konum{
    margin-left:30px;
}
    </style>
        <link rel="icon" href="logo.png" type="image/x-icon" />
</head>
<body>
    <div class="konum">
<div class="logo-konum">
        <img src="logo.png" alt="" class="logo">
    </div>
    <form action="form.php"><input type="submit" value="Müşteri Ekle"  class ="kaydet"></form>
    <form action="kullanicibul.php"><input type="submit" value="Müşteri Bul" class ="kaydet1"></form>
    <form action="listele.php"><input type="submit" value="Tüm Müşteriler" class ="kaydet1"></form>
    </div>
</body>
</html>