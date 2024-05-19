<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $gender = htmlspecialchars($_POST['gender']);
    $message = htmlspecialchars($_POST['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me and Myself</title>
    <link rel="stylesheet" href="iletisimbilgileri.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Hakkımda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ozgecmisim.html">Özgeçmişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgiAlanlarim.html">İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html">Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="container">
            <h1>İletişim Bilgileriniz</h1>
            <p><strong>Ad:</strong> <?php echo $firstName; ?></p>
            <p><strong>Soyad:</strong> <?php echo $lastName; ?></p>
            <p><strong>E-mail:</strong> <?php echo $email; ?></p>
            <p><strong>Cinsiyet:</strong> <?php echo $gender == 'male' ? 'Erkek' : 'Kadın'; ?></p>
            <p><strong>Mesaj:</strong> <?php echo nl2br($message); ?></p>
            <p><strong>Mesaj İçin Teşekkürler!</strong></p>
        </div>
    </div>
</body>
</html>
