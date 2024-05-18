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
    <title>İletişim Bilgileri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('resimler/vincent-van-gogh-seascape-near-les-sai-d75772.jpg');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .container {
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(4px);
            text-align: center; /* Center the text */
            max-width: 600px; /* Set a maximum width for the container */
            width: 100%; /* Ensure the container takes full width up to the max-width */
            margin: 0 20px; /* Add some side margins to prevent touching the screen edges on small devices */
        }
        p {
            margin: 10px 0; /* Add some margin to paragraphs for better spacing */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>İletişim Bilgileriniz</h1>
        <p><strong>Ad:</strong> <?php echo $firstName; ?></p>
        <p><strong>Soyad:</strong> <?php echo $lastName; ?></p>
        <p><strong>E-mail:</strong> <?php echo $email; ?></p>
        <p><strong>Cinsiyet:</strong> <?php echo $gender == 'male' ? 'Erkek' : 'Kadın'; ?></p>
        <p><strong>Mesaj:</strong> <?php echo nl2br($message); ?></p>
        <p><strong>Teşekkürler!</strong></p>
    </div>
</body>
</html>
