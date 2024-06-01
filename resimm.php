
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
    <meta charset="utf-8">
    <title>BARTINEÖPGİRİŞ</title>
    <link rel="stylesheet" href="resim.css">
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

<div id="dosya">
<form action="" method="post" enctype="multipart/form-data">
    <input name="resim" id="resim" value="Gözat" type="file" />
    <input name="kaydet" id="kaydet" value="Kaydet" type="submit" />
    </form></div>
     <section id="ekle">
      <div class="container">
          
          <form action="" method="post">
          <div id="form">
                <input type="text" name="isim" placeholder="İSİM" required class="form-control">
             <input type="text" name="soyisim" placeholder="SOYİSİM" required class="form-control">
              <input type="text" name="etkinlikadi" placeholder="ETKİNLİĞİN ADI" required class="form-control">
              <input type="text" name="yer" placeholder="YER" required class="form-control">
              
                <input type="text" name="zaman" placeholder="ZAMAN" required class="form-control"></div>
             <p>  <input type="submit" value="YüKLE"></p>
            
          </form>
          
          
          </div>
      </section>
    <?   
    
    include("resimkaydetme.php");
    if ($_POST['kaydet']=="Kaydet")
       {
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $etkinlik=$_POST["etkinlikadi"];
    $yer=$_POST["yer"];
    $zaman=$_POST["zaman"];
    
    
  
  
    $ekle="INSERT INTO icerik ( resim, isim, soyisim, etkinlikadi, yer, zaman) VALUES ('$ad','$soyad','$etkinlik','$yer','$zaman')";
         
             if ($_FILES['resim']['name'])
             {
                 $file_path    = "test/";
                 $file_name    = $_FILES['resim']['name'];
                 $name_bol     = explode('.', $file_name);
                 $sonuncu     = count($name_bol)-1;
                 $format     = strtoupper($name_bol["$sonuncu"]);
               
                $result      =  move_uploaded_file($_FILES['resim']['tmp_name'], $file_path."test.".$format);
                 chmod('kaydet',0777);
                if($result)
                    echo $resim_adi  ="test.".$format;
                else
                    echo "Resim Yüklenemedi.";
             } else
                 echo "Resim bulunamadı.";
             
        }   
?>

</body>
</html>