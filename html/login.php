<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>LOGIN | LOGFOTO</title>
  </head>
  <div class="container">
  <body>

    <?php

      include_once ("php/sidebar.php")

     ?>

<section>

  <div class="photoContainer">
    <img src="../img/logo.png" alt="logo">
  </div>


<div class="title">
  <h2>Login</h2>
</div>


<form id="loginform" action="login.html" method="post">
  <label class="label" for="">
<input type="text" class="input" name="email" placeholder="E-mail">
</label>

<br>

<label class="label" for="">
<input type="text" class="input" name="password" placeholder="Password">
</label>

<br>

<button type="button" class="loginbutton" name="button">Login</button>

</form>

<a class="link" href="registration.html">Click here for registration</a>


</section>

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

  </div>
</html>
