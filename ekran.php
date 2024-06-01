
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BARTINEÖPGİRİŞ</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/16b25c7560.js" crossorigin="anonymous"></script>
    
  </head>
  <body>
<div class = "container">
  <div class="navbar">
    <div class="BARTINEÖP">
      <img src="download.png" widht="70px" height="70px" >
<a href="#">BARTINEÖP</a>
</div>

<ul>

  
  
  <li  ><a href="ilk.php"><i class="fa-solid fa-house"></i>ANASAYFA</a></li>
  <li><a href="ekran.php"><i class="fa-solid fa-face-awesome"></i>GİRİŞ YAP</a></li>
</ul>

</div>
</div>
<div class ="panel">
  <h1>HOŞGELDİNİZ</h1>
   
    <form>
<h3><p>ÖĞRENCİ NO</p></h3>
<p><input type="text" name="" placeholder="ÖĞRENCİ NO GİRİNİZ"></p>
<h3><p>ŞiFRE</p></h3>
<p><input type="password" name="" placeholder="*********"></p>
<p><input type="submit" name="" value="Giriş yap"></p>
 <p><a href="ilk.php" >Giriş Yapmadan Devam Et</a></p>
 <p>ÖĞRENCİ NUMARASINA AİT OLAN BİREYLERİN ŞİFRESİ TC'DİR.</p>

    </form></div>


    <?php
    
    include("kisiler.php");

if(isset($_POST["Giriş yap"])){

    $ogrencino=$_POST["text"];
    $pass=$_POST["şifre"];
    
    
  
  
    $ekle="INSERT INTO giriskismi (ogrencino, password_) VALUES ('$ogrencino','$pass')";
    
    $calistirekle=mysqli_query($kisiler ,$ekle);
    if($calistirekle){
        echo '<div class="alert alert-success" role="alert">Başarıyla gerçekleşti.</div>';
    }
    else{
        echo'<div class="alert alert-danger" role="alert">Başarıyla gerçekleşti.</div>';
    }
    mysqli_close($kisiler);
}
?>

  </body>



</html>










