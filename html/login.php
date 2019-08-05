<?php

require_once("php/funciones.php");

if (isLogged()) {
  header("location:homePost.php");exit;
}

if ($_POST) {
  $errors = validateLogin($_POST);

  if (count($errors) == 0) {
    login($_POST["email"]);
    header("location:homePost.php");exit;
  } else {
    foreach ($errors as $error) {
      echo $error . "<br>";die;
    }
  }
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
    <title>LOGIN | MyFuture</title>
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
<input type="password" class="input" name="password" placeholder="Password">
</label>

<br>

<button type="button" class="buttonPages" name="button">Login</button>

</form>

<a class="link" href="registration.php">Click here for registration</a>


</section>


<?php

  include_once ("php/footer.php")

 ?>

  </body>

  </div>
</html>
