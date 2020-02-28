<!DOCTYPE html>

<html>
<head>
    <title>Üyelik Sayfası</title>
    <link rel="shortcut icon" href="resim/bayrak.ico" />
	<meta charset="utf-8" />
    <style>
         body{
            background-image:url('resim/bulut.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
         .btn{
             border: 2px solid #DC143C;
             background-color: white;
             color: #DC143C;
            padding: 10px 20px;
            cursor: pointer;
            
         }
       .btn:hover {
             color: #fff;
             background-color:pink;
         }
          div.lzm{
              font-family:cursive;
              color:crimson;
          }
         .uye{
            color:crimson;
            text-align:center;
            font-size:40px;
            font-family:cursive;
        }
        div.tablo{
            border:  solid #DC143C;
            padding: 50px 50px; 
            border-width:50px;   
            text-align:center;
           
        }
       

    </style>
   

</head>
<body>
   

    <form form action="" method="post">
   
            <div class="tablo">
                <div class="uye"> Yeni Üye Kaydı</div>
                <br />
                <!--<div class="resim"><img src="resim/uye.png" /></div>-->
                <!--üye formu resmi için-->
                <div class="lzm">
                    İsim: &ensp;&ensp;&nbsp;&ensp;&ensp;
                    <input type="varchar"  onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="isim" pattern[words] autocomplete="off" maxlength="50" required>
                    <br /><br />
                    Soyisim:&ensp;&ensp;&ensp;
                    <input type="varchar" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="soyisim" autocomplete="off" maxlength="50" required>
                    <br /><br />                   
                    Mail Adresi:
                    <input type="email" name="mail" autocomplete="off" maxlength="50" required>
                    <br /><br />
                    Kullanıcı Adı:
                    <input type="text" name="kullaniciadi" autocomplete="off" maxlength="15" required>
                    <br /><br />
                    Şifre:&ensp;&ensp;&nbsp;&ensp;&ensp;&ensp;
                    <input type="password" name="sifre" autocomplete="off"  maxlength="10" required>
                    <br /><br />
                </div>
                 <button class="btn" onclick="onayla()">Üye Ol</button>  
               
              
            </div>
        
    </form>
</body>
</html>



<?php

if (isset($_POST['isim'], $_POST['soyisim'], $_POST['mail'],$_POST['kullaniciadi'],$_POST['sifre'])) {

    $isim = trim(filter_input(INPUT_POST, 'isim', FILTER_SANITIZE_STRING));
    $soyisim = trim(filter_input(INPUT_POST, 'soyisim', FILTER_SANITIZE_STRING));
    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
    $kullaniciadi = trim(filter_input(INPUT_POST, 'kullaniciadi', FILTER_SANITIZE_STRING));
    $sifre = trim(filter_input(INPUT_POST, 'sifre', FILTER_SANITIZE_STRING));

    if (empty($isim) || empty($soyisim) || empty($mail) || empty($kullaniciadi || empty($sifre))) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    $baglanti = new mysqli("localhost", "root", "", "giris");

    if ($baglanti->connect_errno > 0) {
        die("<b>Bağlantı Hatası:</b> " . $baglanti->connect_error);
    }

    $baglanti->set_charset("utf8");

    $sorgu = $baglanti->prepare("INSERT INTO uyeler(isim,soyisim,mail,kullaniciadi,sifre) VALUES(?, ?, ?, ?, ?)");

    $sorgu->bind_param('sssss', $isim, $soyisim, $mail, $kullaniciadi, $sifre);   
    $sorgu->execute();

    if ($baglanti->errno > 0) {
        die("<b>Sorgu Hatası:</b> " . $baglanti->error);
    }
   
         // echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";
          header('location:giris.php');

          $sorgu->close();
           $baglanti->close();
           

  
}
?>



 