
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css?v=02-07-2019">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CONTACT | MyFuture</title>
  </head>
  <body>
    <div class="container">

<?php

  include_once ("../partials/sidebar.php")

 ?>


<section>
  <div class="photoContainer">
    <img src="../data/img/logo.png" alt="logo">
  </div>

<div class="title">
  <h2>Contact Us</h2>
</div>


<form id="form" action="contact.php" method="post">
  <label class="label" for="">
<input type="text" class="input" name="email" placeholder="First Name">
</label>


<br>

<label class="label" for="">
  <input type="text" class="input" name="password" placeholder="Last Name">
</label>



<br>

<label class="label" for="">
  <textarea class="input" name="text" placeholder="Enter your message for us here." rows="8" cols="80"></textarea>

</label>

<br>



</label>

<button type="button" class="buttonPages" name="button">Submit</button>


</form>


</section>


<?php

  include_once ("../partials/footer.php")

 ?>

  </body>

  </div>
</html>

