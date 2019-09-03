
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
  <title>PROFILE | MyFuture</title>
</head>

  <body>

    <?php

    include_once ("../partials/sidebar.php");

     ?>

     <div class="photoContainer">
       <img src="../data/img/logo.png" alt="logo logFoto">

       <div class="titleHome title">
         <h1>MyFuture</h1>
       </div>

     </div>

       <div class = "addPostContainer"> 
        <a href="addPost.php"><i class="fa fa-plus">Add Post</i></a>
  </div>

<main class="profileUserContainer">

    <div class="containerUser">

    <div class="card">
      <div class="imageUser">
          <img src="../data/img/paco.jpg" alt="Paco">
        </div>
        <h1>Paco Amoroso</h1>
      <p class="titleUser">Trappin</p>
      <p>Harvard University</p>


      <p class="text">User name: Paquito20</p>
      <p class="text">First name: Paco</p>
      <p class="text">Last name: Amoroso</p>
      <p class="text"><i class="fa fa-envelope-open"></i> E-mail: paquitoamor@outlook.com</p>
      <p class="text">Registration: 16 june 2018</p>
      <p class="text">Messages: 240</p>
      <p class="text">Likes: 30</p>
      <p class="text">Points: 8</p>

      <a class="social" href="#"><i class="fa fa-spotify"></i></a>
      <a class="social" href="#"><i class="fa fa-twitter"></i></a>
      <a class="social" href="#"><i class="fa fa-linkedin"></i></a>
      <a class="social" href="#"><i class="fa fa-facebook"></i></a>
    </div>

  </div>

      <div class = "mobileAddPostContainer"> 
        <a href="addPost.php"><i class="fa fa-plus">Add Post </i></a>
  </div>

  <div class="postContainerProfile">


      <div class="postImageProfile">

      <div class="single-img">

        <img src="../data/img/nochefotos.jpg" alt="postFoto">

        <div class="img-overlay">

          <div class="buttonsContainer">

            <div class="img-heart">
              <a href="postDetails.php">
                <i class="fa fa-heart">38</i>
              </a>

            </div>

            <div class="img-comments">
              <a href="postDetails.php">
                <i class="fa fa-comment"> 5</i>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="single-img">

        <img src="../data/img/retro.jpg" alt="postFoto">

        <div class="img-overlay">

          <div class="buttonsContainer">

            <div class="img-heart">
              <a href="#">
                <i class="fa fa-heart"> 38</i>
              </a>

            </div>

            <div class="img-comments">
              <a href="#">
                <i class="fa fa-comment"> 5</i>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="single-img">

        <img src="../data/img/pantano.jpg" alt="postFoto">

        <div class="img-overlay">

          <div class="buttonsContainer">

            <div class="img-heart">
              <a href="#">
                <i class="fa fa-heart"> 38</i>
              </a>

            </div>

            <div class="img-comments">
              <a href="#">
                <i class="fa fa-comment"> 5</i>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="single-img">

        <img src="../data/img/future.jpg" alt="postFoto">

        <div class="img-overlay">

          <div class="buttonsContainer">

            <div class="img-heart">
              <a href="#">
                <i class="fa fa-heart"> 38</i>
              </a>

            </div>

            <div class="img-comments">
              <a href="#">
                <i class="fa fa-comment"> 5</i>
              </a>
            </div>
          </div>

        </div>
      </div>

      <div class="single-img">

        <img src="../data/img/tree.jpg" alt="postFoto">

        <div class="img-overlay">

          <div class="buttonsContainer">

            <div class="img-heart">
              <a href="#">
                <i class="fa fa-heart"> 38</i>
              </a>

            </div>

            <div class="img-comments">
              <a href="#">
                <i class="fa fa-comment"> 5</i>
              </a>
            </div>
          </div>

        </div>
      </div>










      </div>
  </div>



   </main>


  <?php

  include_once ("../partials/footer.php");

   ?>
  </body>
</html>