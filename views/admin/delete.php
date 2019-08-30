<?php
    require_once ("../../partials/db.php");
    require_once ("../../partials/adminFunctions.php");

    global $db;

    $id = "";
 

    

    if ($_POST) {
        $user = bringAllUsers();
        // echo ("<pre>");
        // var_dump($user);
        // echo ("</pre>");

         deleteUserById($_POST["id"]);


   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">

    <title>Delete</title>
</head>
<body>
    <form action="delete.php" method="POST">
<div class="formContainer">
    <label class="label">id: </label>
    <input type="text" name="id" value="" required>
    </label>
    <br>
    <button type="submit" class="addButton">Delete User !</button>
</div>
    </form>
</body>
</html>