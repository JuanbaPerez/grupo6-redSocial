<?php
    require_once ("../../partials/db.php");
    require_once ("../../partials/adminFunctions.php");

    global $db;

    $name = "";
    $lastName = "";
    $userName = "";
    $email = "";
    $password= "";

    

    if ($_POST) {

        $user = createUser($_POST);

        if (addUser($user) == true) {
             echo ("No se pudo guardar al Usuario");
        } else {
             echo ("Se agrego con exito");
        }


   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../../css/style.css">

    <title>Document</title>
</head>
<body>
    <form action="add.php" method="POST">
<div class="formContainer">
    <label class="label">Name: </label>
    <input type="text" name="name" value="" required>
    </label>

    <label class="label">Last Name: </label>
    <input type="text" name="lastName" value="" required>
    </label>


    <label class="label">Birthday: </label>
    <input type="date" name="birthday" value="" required>
    </label>

    <label class="label">User: </label>
    <input type="text" name="userName" value="" required>
    </label>

    <label class="label">Email: </label>
    <input type="text" name="email" value="" required>
    </label>

    <label class="label">Password: </label>
    <input type="password" name="password" value="" required>
    </label>
    <br>
    <button type="submit" class="addButton">Add User !</button>
    </div>
    </form>
</body>
</html>