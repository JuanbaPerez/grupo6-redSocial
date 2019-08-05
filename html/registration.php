
<?php

  require_once("php/funciones.php");

  $name = "";
  $user = "";
  $email = "";
  $pass = "";
  $repass = "";
  $lastname = "";

if (isLogged()) {
  header("location: homePost.php");exit;
}




  if ($_POST) {
    $errors = validateRegistration($_POST);

      
     if (count($errors) == 0) {
       
       $user = createUser($_POST);

       saveUser($user);

       

       login($user["email"]);

     
       header("location:login.php");exit;
     }


  // foreach ($errors as $error) {
  //  echo $error . "<br>";
  // } //MUESTRO LOS ERRORES CON ESTO

  $name = $_POST["name"];
  $user = $_POST["username"];
  $email = $_POST["email"];
  $lastname = $_POST ["last-name"];


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
    <title>REGISTRATION | MyFuture</title>
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
<?php if (isset($errors['name'])) : ?>
  <p class="errors"><?php echo $errors['name'] ?></p>
<?php endif; ?>

<label class="label" for="">
<input type="text" class="input" name="last-name" placeholder="Last Name" value="<?=$lastname?>">

</label>
<?php if (isset($errors['last-name'])) : ?>
<p class="errors"><?php echo $errors['last-name'] ?></p>
<?php endif; ?>

<label class="label"></label>
<input type="date" class="input" name="birthday" value="">
</label>


<label class="label" for="">
<input type="text" class="input" name="username" placeholder="User" value="<?=$user?>">
</label>
<?php if (isset($errors['user'])) : ?>
  <p class="errors"><?php echo $errors['user'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="text" class="input" name="email" placeholder="E-mail" value="<?=$email?>">
</label>
<?php if (isset($errors['email'])) : ?>
  <p class="errors"><?php echo $errors['email'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="password" class="input" name="password" placeholder="Password">
</label>
<?php if (isset($errors['password'])) : ?>
  <p class="errors"><?php echo $errors['password'] ?></p>
<?php endif; ?>



<label class="label" for="">
<input type="password" class="input" name="confirm_password" placeholder="Verify password">
</label>
<?php if (isset($errors['confirm_password'])) : ?>
  <p class="errors"><?php echo $errors['confirm_password'] ?></p>
<?php endif; ?>

<!-- <label class="label" for=""> I agree with the <a href = "php/terms.php">Terms and conditions</a>
<input type="checkbox" class="input terms" name="terms" value="">
</label> -->


<button type="submit" class="buttonPages">Registrer!</button>

</form>





</section>


<?php

  include_once ("php/footer.php")

 ?>









  </body>
  </div>
</html>
