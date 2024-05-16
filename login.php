
<?php
 session_start();

$users = [];

function registerUser($email, $password) {
    global $users;
    $users[$email] = $password;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Validate input
    if (!empty($email) && !empty($password)) {
        // Add user to the array
        registerUser($email, $password);
        
        // Redirect to login page
        header("Location: login.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Me and Myself</title>
    <link rel="stylesheet" href="login.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


   

   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="hakkımda.html">Hakkımda</a>
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

         <div class="wrapper">
        <div class="form-box login"> 
        <?php if (isset($loginError)) { echo "<p>$loginError</p>"; } ?>
            <h1>Login</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="email"  name="email" required>
                    <label>E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password"  name="password"  required>
                    <label>Şifre</label>
                </div>
                
                   
                
              <button type="submit" class="btn">Login
              </button>
              <div class="login-register">
              <p>Hesabınız yok mu? <a href="#" class="register-link">Register</a></p>
            </div>

            </form>
        </div>
        <div class="form-box register"> 
            <h1>Registration</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></ion-icon></span>
                    <input type="email" required>
                    <label>E-mail</label>
                </div>
              
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required>
                    <label>Şifre</label>
                </div>
               
              <button type="submit" class="btn">Register
              </button>
              <div class="login-register">
              <p>Hesabınız var mı? <a href="#" class="login-link">Login</a></p>
            </div>
            </form>
        </div>
    </div> 
    <script src="login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>

<?php
// Start the session
session_start();

// Array to store user accounts (ideally fetched from a database)
$users = [
    'user1@example.com' => 'password1',
    'user2@example.com' => 'password2',
    // Add more users as needed
];

function loginUser($email, $password) {
    global $users;
    if (isset($users[$email]) && $users[$email] == $password) {
        // Set session variables
        $_SESSION["email"] = $email;
        return true;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Validate input
    if (!empty($email) && !empty($password)) {
        // Check if user credentials are valid
        if (loginUser($email, $password)) {
            // Redirect to dashboard or some other page
            header("Location: hakkımda.html");
            exit;
        } else {
            $loginError = "Invalid email or password";
        }
    } else {
        $loginError = "Email and password are required";
    }
}
?>











