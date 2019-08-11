<?php

  require_once ("db.php");
  require_once ("php/adminFunctions.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">

    <title>Admin Panel</title>
</head>
<body class="adminPanelBody">

    <div class="header">
    <img class="adminPhoto" src="../img/adminPhoto.png" alt="adminLogo"><br> Panel de Adminsitracion
    </div>

<div class="adminContainer">

        <div class="sidebarAdminPanel">
    <ul class="adminUl">
        <li class="adminLi">
        <a href="add.php" target="_blank"> Add</a> </li>
         <li class="adminLi">
        <a href="delete.php" target="_blank"> Delete</a> </li>
        <!-- <li class="adminLi">
        <a href="update.php" target="_blank"> Update</a> </li> -->
        
    </ul>
    </div>

        <div class="data">
<?php
        $users = bringAllUsers();

    
                foreach ($users as $user) {
                    echo("User:" . $user["id"]); echo ("<br>");
                    echo("Name: " .$user["name"]); echo ("<br>");
                    echo("Last Name: " . $user["lastName"]); echo ("<br>");
                    echo("BirthDay: " . $user["birthday"]); echo ("<br>");
                    echo("User: " . $user["username"]); echo ("<br>");
                    echo("Email:" . $user["email"]); echo ("<br>");
                    echo("<hr>");
                    echo ("<br>");
                }

                ?>
                
    </div>

    </div>
</body>
</html>