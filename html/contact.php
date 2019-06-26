
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>CONTACT | MyFuture</title>
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
  <h2>Contact Us</h2>
</div>


<form id="form" action="login.html" method="post">
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


<!--
 <div class="row">
   <div class="column">
     <img src="/w3images/map.jpg" style="width:100%">
   </div>
   <div class="column">
-->

      <!--
     <form action="/action_page.php">
       <label for="fname">First Name</label>
       <input type="text" id="fname" name="firstname" placeholder="Your name..">
       <label for="lname">Last Name</label>
       <input type="text" id="lname" name="lastname" placeholder="Your last name..">
-->
       <!--
       <label for="country">Country</label>
       <select id="country" name="country">
         <option value="australia">Australia</option>
         <option value="canada">Canada</option>
         <option value="usa">USA</option>
       </select>
       -->

<!--
       <label for="subject">Subject</label>
       <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
       <input type="submit" value="Submit">
     </form>
   </div>
 </div>
</div>
-->
