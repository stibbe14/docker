<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>The Red Cafe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="assets/logo.jpg">
</head>
<body>
    <!-- jo -->
<div class="all">
    <div class="infobalk">
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
    <div class="parent">
        <div class="menubalk">
            <a href="index.php">Home</a>
            <a href="shopping.php">Menu</a>
            <a href="#">Bezorging</a>
            <a href="contact.php">Contact</a>
        </div>
        <div class="login">
        <a href="login.php"><img src="assets/user.png" alt=""></a>
        </div>
        <div class="order">
        <a href="#"><img src="assets/bag.png" alt=""></a>
        </div>

    </div>
</div>
        

<div class="wrapper">
        <div class="container">
          <div class="sign-up-container">
            <form action='register_logic.php' name='register_logic.php' method = 'POST'> 
              <h1>Maak een account</h1>
              <div class="social-links">
                <div>
                  <a href="#"></a>
                </div>
                <div>
                  <a href="#"></a>
                </div>
                <div>
                    <a href="#"></a>
                  </div>
                  <div>
                    <a href="#"></a>
                  </div>
                
              </div>
              <span>Of registreer hier met je email</span>
              <input type="text" name="username" placeholder="Naam">
              <input type="email" name="email" placeholder="Email">
              <input type="password" name="pass" placeholder="Wachtwoord">
              <input type="password" name="pass2" placeholder="Herhaal Wachtwoord">
              <button class="form_btn">sign in</button>
            </form>
          </div>
          <div class="sign-in-container">
            <div class="snoepert">
              <h1>login</h1>
              <div class="social-links">
                <div>
                  <img src="" alt="">
                </div>
                <div>
                  <img src="" alt="">
                </div>
                <div>
                    <img src="" alt="">
                  </div>
                  <div>
                    <img src="" alt="">
                  </div>
                
                
              </div>
              
              <span>of gebruik je account</span>
            <form action='login_logic.php' name='login_logic.php' method = 'POST'> 
              <input name = "username" type="text" placeholder="Email">
              <input name = "password" type="password" placeholder="Wachtwoord">
              <button type="submit" value = "login" class="form_btn">Login</button>
            </form>
          </div>
          </div>
          <div class="overlay-container">
            <div class="overlay-left">
              <h1>Welkom terug</h1>
              <p>om in te loggen gebruik je inlog gegevens en druk op de knop hier onder.</p>
              <button id="signIn" class="overlay_btn">Login</button>
            </div>
            <div class="overlay-right">
              <h1>Hallo maak hier een account</h1>
              <p>maak een account aan om up to date te blijven met ons en de aanbiedingen. gebruik de knop hier onder.</p>
              <button id="signUp" class="overlay_btn">maak een account</button>
            </div>
          </div>
        </div>
      </div>
     
<footer>
<div class="text1">
<p>
    Heyendaalseweg 98,
    
    Nijmegen 6525EE
</p>
</div>

<div class="text2">
<p>
theredcafe@gmail.com, +31612345678
</p>
</div>    

</footer>
       
    










</div>
<script src="js/script.js"></script>
</body>
</html>