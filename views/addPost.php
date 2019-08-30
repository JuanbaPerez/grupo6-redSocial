<?php
require_once ("../partials/db.php");
require_once ("../partials/postFunctions.php");
  require_once ("../partials/config.php");


 $imageFile = isset($_FILES['imageFilePost']) ? $_FILES['imageFilePost'] : "";

if ($_POST) {
    // echo ("<pre>");
    // var_dump($_FILES);
    // var_dump($_POST);exit;
    // echo ("</pre>");
    $newPost = createPost($_POST);
    
    $newPost["imageFilePost"] = savePathPostImage($imageFile);

    if (addPost($newPost) == true) {
        echo ("No se pudo agregar el post");
    } else {
        echo ("El post fue agregado con exito");
    }
   

    

}   


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Post</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel|Cinzel+Decorative&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header>
    <?php

    require_once ("../partials/sidebar.php")

        ?>
    </header>

       <div class="photoContainer">
       <img src="../data/img/logo.png" alt="logo logFoto">

       <div class="titleHome title">
         <h1>MyFuture</h1>
       </div>

     </div>
    
<main>

        <form action="addPost.php" method="POST" enctype="multipart/form-data">
<div class="formContainer">

    <label class="labelPost" for="">Carga tu imagen aqui!
        <input type="file" class="inputAddPost" name="imageFilePost" value="<?=$imageFile?>" required accept="image/png, image/jpeg, image/jpg">
    </label>

    <label class="label"></label>
    <textarea name="footerTextAreaPost" id="" cols="30" rows="10" placeholder="Pie de foto"></textarea>
    </label>



    <br>
    <button type="submit" class="addButton">Add Post !</button>
    </div>
    </form>

    </main>


<footer>

    </footer>

</body>
</html>