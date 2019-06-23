
<?php

  require_once("php/funciones.php");

  $name = "";
  $user = "";
  $email = "";
  $pass = "";
  $repass = "";





if ($_POST) {
  //  VALIDO
  $errores = validarRegistracion($_POST);

  // SI NO HAY ERRORES
  if (empty($errores)) {
    //  REGISTRAR
    $usuario = armarUsuario($_POST);
    registrar($usuario);

    //REENVIARLO AL EXITO
    header("location: login.php");exit;
  }

  //foreach ($errores as $error) {
  //  echo $error . "<br>";
  //}

  $name = $_POST["name"];
  $user = $_POST["user"];
  $email = $_POST["email"];




}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>REGISTRATION | LOGFOTO</title>
  </head>



  <div class="container">

  <body>
    <?php

      include ("php/sidebar.php")

     ?>

<section>


  <div class="photoContainer">
    <img src="../img/logo.png" alt="logo">

  </div>

<div class="title">
  <h2>Registration</h2>
</div>

<form id="loginform" action="registration.php" method="POST">

  <label class="label" for="">
<input type="text" class="input" name="name" placeholder="Name" value="<?=$name?>">
</label>
<?php if (isset($errores['name'])) : ?>
  <p class="errors"><?php echo $errores['name'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="text" class="input" name="user" placeholder="User" value="<?=$user?>">
</label>
<?php if (isset($errores['user'])) : ?>
  <p class="errors"><?php echo $errores['user'] ?></p>
<?php endif; ?>





<label class="label" for="">
<input type="text" class="input" name="email" placeholder="E-mail" value="<?=$email?>">
</label>
<?php if (isset($errores['email'])) : ?>
  <p class="errors"><?php echo $errores['email'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="password" class="input" name="password" placeholder="Password">
</label>
<?php if (isset($errores['password'])) : ?>
  <p class="errors"><?php echo $errores['password'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="password" class="input" name="rePass" placeholder="Verify password">
</label>
<?php if (isset($errores['rePass'])) : ?>
  <p class="errors"><?php echo $errores['rePass'] ?></p>
<?php endif; ?>




<button type="submit" class="loginbutton" name="button">Registrer!</button>

</form>





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