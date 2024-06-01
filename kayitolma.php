
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BARTINEÖPGİRİŞ</title>
    <link rel="stylesheet" href="kayitt.css">
  </head>
  <body>
<div class = "container">
  <div class="navbar">
    <div class="BARTINEÖP">
      <img src="download.png" widht="70px" height="70px" >
<a href="#">BARTINEÖP</a>
</div>
<ul>
  <li  ><a href="ilk.php">ANASAYFA</a></li>
  <li><a href="ekran.php">GİRİŞ YAP</a></li>

</ul>

</div>
</div>
      
      <section id="iletisim">
      <div class="container">
          <h3 id="kayitislemi">KAYIT OLUN</h3>
          <form action="" method="post">
          <div id="kayitolma">
          <div id="formm">
               <div id="adres">
              <h3>Kayıt olma durumunda size geri dönüş yapılacaktır.</h3></div>
          </div>
          
          <div id="solform">
                <input type="text" name="ogrencino" placeholder="ÖĞRENCİ NO" required class="form-control">
             <input type="text" name="ad" placeholder="AD" required class="form-control">
              <input type="text" name="soyad" placeholder="SOYAD" required class="form-control">
                <input type="text" name="telno" placeholder="TELEFON NUMARASI" required class="form-control"></div>
              <div id="sagform">
           <input type="text" name="fakulte" placeholder="FAKÜLTE ADI" required class="form-control">
           <input type="text" name="bolum" placeholder="BOLUM" required class="form-control">
           <input type="text" name="eposta" placeholder="E-POSTA" required class="form-control">
                  <p>  <input type="submit" value="KAYIT OL"></p>
               </div>
              </div>
          </form>
          <footer>
              <div id="copyright">2022 Tüm Hakları Saklıdır.</div> 
                                 </footer>
          
          
          </div>
      </section>
      <script src="http://code.jquery.com/jquery-3.5.1.slim.min.js"
              integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>



    </body>
</html>
<?php
    
    include("baglanti.php");

if(isset($_POST["KAYIT OL"])){

    $ogrencino=$_POST["ogrencino"];
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $telno=$_POST["telno"];
    $fakulte=$_POST["fakulte"];
    $bolum=$_POST["bolum"];
    $email=$_POST["eposta"];
    
  
  
    $ekle="INSERT INTO kayitislemi (ogrencino, ad, soyad, telno, fakulte, bolum, mail) VALUES ('$ogrencino','$ad','$soyad','$telno','$fakulte','$bolum','$email')";
    
    $calistirekle=mysqli_query($config,$ekle);
    if($calistirekle){
        echo '<div class="alert alert-success" role="alert">Başarıyla gerçekleşti.</div>';
    }
    else{
        echo'<div class="alert alert-danger" role="alert">Başarıyla gerçekleşti.</div>';
    }
    mysqli_close($config);
}
?>