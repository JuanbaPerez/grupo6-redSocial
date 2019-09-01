<?php

require_once ("../partials/postFunctions.php");
require_once ("../models/Post.php");
require_once ("../models/User.php");


?>



<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>POST | MyFuture</title>
</head>



  <body>




    <header>

      <?php

        include_once ("../partials/sidebar.php")

       ?>
    </header>

    <main class="homePostBody">


  <div class="postContainer">


    <div class="photoProfileContainer">
      <img class="profilePicture" src="../data/img/profilepic.jpg" alt="profile">

      <div class="userName">
        <h2>Marcelo Diaz</h2>
        <p>1hs</p>
      </div>

    </div>

    <div class="postImage">
        <!--
          <img src="../data/img/nochefotos.jpg" alt="postFoto">
        -->

        <?php

    $posts = bringPostByUserId();

      foreach ($posts as $post) {
        echo $post->getImage(); echo ("<br>");
 
  
      }

        ?>
    </div>


<div class="postIcons">

  <div class="postIcons-heart">
    <button class="buttons" type="button" name="button"><i class="fa fa-heart"> 38</i></button>

  </div>


  <div class="postIcons-comment">

    <button class="buttons" type="button" name="button"><i class="fa fa-comment"> 5</i></button>

  </div>
</div>





  </div>


  <div class="postContainer">


    <div class="photoProfileContainer">
      <img class="profilePicture" src="../img/franky.jpg" alt="profile">

      <div class="userName">
        <h2>Franky Funk</h2>
        <p>30 minutes</p>
      </div>

    </div>

    <div class="postImage">
        <img src="../data/img/pantano.jpg" alt="postFoto">
    </div>


<div class="postIcons">

  <div class="postIcons-heart">
    <button class="buttons" type="button" name="button"><i class="fa fa-heart"> 30</i></button>

  </div>


  <div class="postIcons-comment">

    <button class="buttons" type="button" name="button"><i class="fa fa-comment"> 12</i></button>

  </div>
</div>





  </div>

  <div class="postContainer">


    <div class="photoProfileContainer">
      <img class="profilePicture" src="../img/profilepic.jpg" alt="profile">

      <div class="userName">
        <h2>Marcelo Diaz</h2>
        <p>1hs</p>
      </div>

    </div>

    <div class="postImage">
        <img src="../data/img/nochefotos.jpg" alt="postFoto">
    </div>


<div class="postIcons">

  <div class="postIcons-heart">
    <button class="buttons" type="button" name="button"><i class="fa fa-heart"> 38</i></button>

  </div>


  <div class="postIcons-comment">

    <button class="buttons" type="button" name="button"><i class="fa fa-comment"> 5</i></button>

  </div>
</div>




  </div>


  <div class="postContainer">


    <div class="photoProfileContainer">
      <img class="profilePicture" src="../img/franky.jpg" alt="profile">

      <div class="userName">
        <h2>Franky Funk</h2>
        <p>30 minutes</p>
      </div>

    </div>

    <div class="postImage">
        <img src="../data/img/pantano.jpg" alt="postFoto">
    </div>


<div class="postIcons">

  <div class="postIcons-heart">
    <button class="buttons" type="button" name="button"><i class="fa fa-heart"> 30</i></button>

  </div>


  <div class="postIcons-comment">

    <button class="buttons" type="button" name="button"><i class="fa fa-comment"> 12</i></button>

  </div>
</div>







</main>



<?php

  include_once ("../partials/footer.php")

 ?>


  </body>
</html>

