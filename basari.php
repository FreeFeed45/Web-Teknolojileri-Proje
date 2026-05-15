<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Başarılı Giriş</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 100px; }
        .success-box { display: inline-block; padding: 50px; border: 2px solid #28a745; color: #28a745; }
    </style>
</head>
<body>

    <div class="success-box">
        <h1>Hoşgeldiniz <?php echo htmlspecialchars($_GET['no']); ?></h1>
        <p>Giriş işleminiz başarıyla tamamlandı.</p>
        <a href="hakkimda.html">Hakkımda</a>
    </div>

</body>
</html>