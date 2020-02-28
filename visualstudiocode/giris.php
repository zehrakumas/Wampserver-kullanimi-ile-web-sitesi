<!DOCTYPE html>

<html>
<head>
<link rel="shortcut icon" href="resim/bayrak.ico" />
<style>
body{
    background-image:url('resim/bulut.jpg');
    background-repeat:no-repeat;
    background-attachment:fixed;
}
div.baslangic{
            color:black;
            font-size:50px;
            font-family:cursive;
            text-align:center;
        }

        div.giris{
       
              margin:50px;
              font-family:cursive;
              color:crimson;
             text-align:center;
             
       }  

       div.tablo{
            border:  solid #DC143C;
            padding: 50px 50px; 
            border-width:50px;         
        }

        div.uye{
            color:crimson;
            text-align:center;
            font-size:40px;
            font-family:cursive;
        }
         #btn{
            border: 2px solid #DC143C;
            background-color: white;
            color: #DC143C;
            padding: 10px 20px;
            cursor: pointer;
            font-family:cursive;
            
         } 
         #btn:hover {
             color: #fff;
             background-color:pink;
             font-family:cursive;
             
         }
         #link{
             text-align:right;
         }
     

        </style>
        </head>
             
            <div class="tablo">
                <div class="uye"> Kullanıcı Girişi</div>
                <br />

<div class="giris">
        <form method="POST">
<label>Kullanıcı Adı:</label>
<input  type="text" name="kullaniciadi" placeholder="Kullanıcı Adı" required/>
<br/><br/>
<label>Şifre:</label>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
<input  type="password" name="sifre" placeholder="Şifre" required />
<br/><br/>
<input type="submit" value="GİRİŞ YAP" name="giris" id="btn" />
<!--  <input type="submit" value="ÜYE OL" id="btn"/> -->
</form>
<br/><br/>
<p id="link">Üye olmak için <a href="uye.php">tıklayınız!</a></p>
</div>
</div>



<?php
//Veri tabanı ile bağlantıyı include komutu ile içe aktarıyoruz.
include 'ayar.php';
if($_POST)
{
//Formumuzdan POST methodu ile aldığımız kullanıcı adı ve şifreyi değişkene atıyoruz.
$kullaniciadi = $_POST['kullaniciadi'];
$sifre = $_POST['sifre'];
//Forma girilen kullanıcı adını veri tabanımızda böyle bir kullanıcı var mı eşleştiriyoruz.
$sql = "SELECT * FROM uyeler where kullaniciadi='$kullaniciadi' and sifre='$sifre'";
$sonuc = $baglanti->query($sql);
if ($sonuc->num_rows > 0) 
{
  //Eğer var ise BAŞARILI komutunu veriyoruz.
  $_SESSION["giris"] = "BAŞARILI";
  header('location:anasayfa.php');
}
else
{
  //Eğer yok ise BAŞARISIZ komutunu veriyoruz.
  $_SESSION["giris"] = "BAŞARISIZ";
}
//Son olarak ekrana giriş durumunu yazdırıyoruz.
echo '<br> GİRİŞ '. $_SESSION["giris"];    
}
?>
