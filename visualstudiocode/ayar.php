<?php
//Bağlantı cümlesi
$baglanti = mysqli_connect("localhost","root","","giris");
// Bağlantı Kontrolü
if (mysqli_connect_errno())
  {
  echo "Bağlantı Yapılamadı. Hata :" . mysqli_connect_error();
  }
//Türkçe Karakter Sorunu Çözümü
$baglanti->set_charset("utf8");
$baglanti->query('SET NAMES utf8');
?>