<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>HOME | LOGFOTO</title>
</head>
<body>

  <header>
    <?php

      include_once ("php/sidebar.php")

     ?>
  </header>

<div class="photoContainer">

  <img src="../img/logo.png" alt="logo logFoto">
</div>

<main>
  <div class="titleHome">
    <h1>LOGFOTO</h1>

  </div>

  <div class="textHome">

    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
  </div>

<div class="buttonHome">
  <h2><a href="registration.html">Get Started</a></h2>

</div>



</main>

<footer class="footer-distributed">

  <div class="footer-left">

    <p class="footer-links">
      <a href="home.html">Home</a>
      ·
      <a href="contact.html">Contact us</a>
      ·
      <a href="login.html">Log In</a>
      ·
      <a href="registration.html">Registrer</a>
      ·
      <a href="FAQ.html">Faq</a>
    </p>

    <p class="footer-company-name">LogFoto &copy; 2019</p>

  </div>

  <div class="footer-right">

    <form method="get" action="#">
      <input placeholder="Search our website" name="search" />
      <i class="fa fa-search"></i>
    </form>

  </div>

</footer>

</body>
</html>
