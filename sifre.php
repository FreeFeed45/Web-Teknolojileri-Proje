<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $ogrenciNo = explode('@', $email)[0];

 
    if (!empty($email) && !empty($password) && ($password === $ogrenciNo)) {
     
        header("Location: basari.php?no=" . urlencode($ogrenciNo));
        exit();
    } else {
        
        header("Location: login.html?hata=1");
        exit();
    }
}
?>