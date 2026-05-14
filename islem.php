<?php

    $ad = $_POST['ad_soyad'];
    $email = $_POST['eposta'];
    $tel = $_POST['telefon'];
    $konu = $_POST['konu'];
    $mesaj = $_POST['mesaj'];
    echo "<h1>Form Verileri Başarıyla Alındı</h1>";
    echo "<hr>";
    echo "<b>Ad Soyad:</b> " . $ad . "<br>";
    echo "<b>E-posta:</b> " . $email . "<br>";
    echo "<b>Telefon:</b> " . $tel . "<br>";
    echo "<b>Konu:</b> " . $konu . "<br>";
    echo "<b>Mesaj:</b> " . $mesaj . "<br>";  
    echo "<br><a href='iletişim.html'>Geri Dön</a>";

?>