<!DOCTYPE html>

<html>
<head>
    <title>İtalya</title>
    <link rel="shortcut icon" href="resim/bayrak.ico" />
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!--yukarıdaki meta etiketiyle görünümün cihaza göre uyumlu olmasını sağlamış olduk-->
   
  

    <!--stilleri tanımladık-->
    <style>  
                            
        h1{
            color:crimson;
            font-size:100px;
            font-family:cursive;
            text-align:center;
        }      
        body{
            background-image:url('resim/bulut.jpg');
            background-repeat:no-repeat;
            background-attachment:fixed;
        }
        .p01{
            font-family:cursive;
            color:black;
            margin-right:200px;
            margin-left:210px;
            
        }       
        #sehir{
            text-align:center;
            font-family:cursive;
            flood-color:hotpink;
            font-size:20px;
            
        }
        span.italya{
            color:crimson;
            font-size:20px;
        }
        #link{
            color:darkviolet;
            font-size:30px;
            font-family:cursive;
            text-align:right;
        }                       
        a:link{
            color:black;
            text-decoration:none;           
            font-family:cursive;
        }
        a:visited {
           color: crimson;
           text-decoration:none;
        }
       a:hover {
       color:crimson;
       text-decoration:none;
       background-color:pink;
       }
       a:active {
      color: plum;
      text-decoration:none;
       }    
        div.resim{
              float:right;
       }
         
         button.btn{
            border: 2px solid #DC143C;
            background-color: white;
            color: #DC143C;
            padding: 10px 20px;
            cursor: pointer;
            font-family:cursive;
            
         } 
       button.btn:hover {
             color: #fff;
             background-color:pink;
             font-family:cursive;
             
         }
    
        /**
            slider stilleri
        */   
       
        #slider {
            position: relative;
            margin: 0 auto;
            width: 950px;
            height: 500px;
            overflow: hidden;
        }

            #slider img {
                width: 950px;
                height: 500px;
            }

            #slider li {
                list-style: none;
            }

        .sliderbutton {
            position: relative;
            margin: 0 auto;
            width: 120px;
            margin-top:auto;
           
        }

            .sliderbutton li {
                list-style: none;
                padding: 5px;
                background: crimson;
                float: left;
                margin-right: 10px;
                border-radius: 10px;
            }

        .sliderleft {
            cursor: pointer;
            background: rgba(0,0,0,0.2);
            position:absolute;
            width: 50px;
            height: 500px;
            line-height: 500px;
            margin-left:40px;
            margin-top:15px;
            
        }

        .sliderright {
            margin-left: 900px;
            cursor: pointer;
            background: rgba(0,0,0,0.2);
            position: absolute;
            width: 50px;
            height: 500px;
            line-height: 500px;
            margin-top:15px;
        }

     

       /**
           slider stilleri
       */
    </style>
    <script>
        $(document).ready(function(){
            var slider = 0;
            $('.sliderbutton li:first').css('background','pink');
            $.slider = function(toplam){
                $('#slider li').hide();
                if(slider < toplam-1)
                {
                    slider++;
                    $('.sliderbutton li').css('background','crimson');
                    $('.sliderbutton li:eq('+slider+')').css('background','pink');
                    $('#slider li:eq('+slider+')').fadeIn("fast");
                }else if(slider < 0){
                    slider = toplam-1;
                    $('.sliderbutton li').css('background','crimson');
                    $('.sliderbutton li:eq('+slider+')').css('background','pink');
                    $('#slider li:eq('+slider+')').fadeIn("fast");
                }else{
                    $('#slider li:first').fadeIn("fast");
                    slider=0;
                    $('.sliderbutton li').css('background','crimson');
                    $('.sliderbutton li:eq('+slider+')').css('background','pink');
                }
            }
            var lenghtli = $('#slider li').length;
            var interval = setInterval('$.slider('+lenghtli+')',3000);
            $('#slider').hover(function(){
                interval = clearInterval(interval);
            },function(){
                interval = setInterval('$.slider('+lenghtli+')',3000);
            })
            $('.sliderbutton li').click(function(){
                $('.sliderbutton li').css('background','crimson');
                $(this).css('background','pink');
                interval = clearInterval(interval);
               var indis = $(this).index();
                $('#slider li').hide();
                $('#slider li:eq('+indis+')').fadeIn("fast");
                slider = indis;
                interval = setInterval('$.slider('+lenghtli+')',3000);
            });
            $('.sliderleft').click(function () {
                slider--;
                $('.sliderbutton li').css('background','crimson');
                if(slider < 0)
                {
                    $('.sliderbutton li:last').css('background','pink');
                    slider = lenghtli-1;
                }else{
                    $('.sliderbutton li:eq('+slider+')').css('background','pink');
                }
                $('#slider li').hide();
                $('#slider li:eq('+slider+')').fadeIn("fast");
            });
            $('.sliderright').click(function () {
                slider++;
                $('.sliderbutton li').css('background','crimson');
                if(slider > lenghtli-1)
                {
                    $('.sliderbutton li:first').css('background','pink');
                    slider = 0;
                }else{
                    $('.sliderbutton li:eq('+slider+')').css('background','pink');
                }
                $('#slider li').hide();
                $('#slider li:eq('+slider+')').fadeIn("fast");
            });
        });
        
    </script>
    
	
</head>
<body>

<p id="link"><a href="giris.php">Oturumu Kapat</a></p>

    <h1>İTALYA'YA DAİR</h1>

   
        <p id="sehir">
        <a href="anasayfa.php">ANASAYFA  </a>
        <a href="amalfi.html">AMALFİ  </a>
        <a href="capri.html">CAPRİ  </a>
        <a href="floransa.html">FLORANSA  </a>
        <a href="milano.html">MİLANO  </a>
        <a href="napoli.html">NAPOLİ  </a>       
        <a href="pusitano.html">PUSİTANO  </a>
        <a href="puglia.html">PUGLİA  </a>
        <a href="roma.html">ROMA  </a>
        <a href="venedik.html">VENEDİK  </a>
    </p>
    <center><img src="resim/italya3.jpg" width="900" height="500" /></center>
    <br />
    <p class="p01"><span class="italya">İtalya</span> hem Akdeniz ülkesi olma özelliğiyle hem de tarih kokan sokaklarıyla yurt dışı gezileri için öncelikli yerlerden. Sanatla yaşamın uyumunun en estetik şekliyle yaşandığı, sokak ve mekanlarına, moda alanındaki iddiasına, otantik tarifleri kaybolmamış yerel tatlarına ve Akdeniz ruhunu katıksız haliyle paylaşan eğlenceli, hayattan keyif alan insanların yaşadığı bir ülke.</p>

    <p class="p01"><span class="italya">İtalya</span> Avrupa’nın güneyinde bulunan bir Akdeniz ülkesi. Batı kıyısı Akdeniz’e ve doğu kıyısı Adriyatik’e bakıyor. Fransa, İsviçre, Avusturya ve Slovenya kuzeyde komşu ülkelerini oluşturuyor. Dünyadaki birçok ülkenin toplamından daha çok sanat eserine sahip, felsefenin modayla, sanat tarihinin sokakla yapmacıksız bir şekilde el ele verdiği, kahve kokusunun günlük hayatı renklendirdiği doyum olmaz bir ülke <span class="italya">İtalya.</span></p>

    <p class="p01"><span class="italya">İtalya</span> 20 bölgeden oluşuyor. 18’i karada 2 tanesi de denizde bulunan Sicilya ve Sardunya. Hepsi İtalyan olmasına rağmen her bölge ayrı olarak kendi gelenek göreneklerine ve yemek kültürüne sahip. <span class="italya">İtalya</span>’da en çok ziyaret edilen şehirlerin başında Roma, Venedik, Floransa, Napoli, İtalya italy bölgesi ve Amalfi Kıyıları geliyor. </p>
    <br />   
    <!--SLİDER-->
    <div id="slider">

        <div class="sliderleft"></div>
        <div class="sliderright"></div>
        <ul>
            <li> <img src="resim/italya4.jpg" alt=""></li>
            <li> <img src="resim/italya2.jpg" alt=""></li>
            <li> <img src="resim/italya3.jpg" alt=""></li>
            <li> <img src="resim/italya5.jpg" alt=""></li>
        </ul>


    </div>
    <div class="sliderbutton">
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>

    </div>

    <!--SLİDER-->
    <br />
    <p id="link"><a href="https://yoldaolmak.com/ulkeler/avrupa/italya">Daha Fazla Bilgi İçin Tıklayınız...</a></p>
    
</body>
</html>

