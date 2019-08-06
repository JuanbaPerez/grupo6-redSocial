
<?php
include_once ("db.php");

session_start();








  function validateRegistration($data) {
    $errors = [];

//NAME
    if ($data["name"] == "") {
      $errors["name"] = "Tienes que llenar el Nombre";
    }
    if (strlen($data["name"]) < 6) {
      $errors["name"] = "Tienes que poner almenos 6 caracteres";
    }

    if ($data["last-name"] == ""){
      $errors ["last-name"] = "Tienes que llenar el Apellido";
    }

    if (strlen($data["last-name"])<4){
      $errors["last-name"] = "Tienes que poner almenos 4 caracteres";
    }


//USER
    if ($data["username"] == "") {
      $errors["username"] = "Tienes que llenar el user";
    }
    if (strlen($data["username"]) < 5) {
      $errors["username"] = "Tienes que ingresar al menos 5 caracteres";
    }


//EMAIL
    if ($data["email"] == "") {
      $errors["email"] = "Tienes que llenar el mail";
    } else if (filter_var($data["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errors["email"] = "Tiene que ser un mail valido";
    } //ELSE IF PARA EXISTE MAIL FUNCTION


//PASS

    if ($data["password"] == "") {
      $errors["password"] = "Tienes que llenar la password";
    }
//REPASS
    if ($data["confirm_password"] == "") {
      $errors["confirm_password"] = "Tienes que llenar la confirmacion de la password";
    }
//COINCIDAN LAS 2 Y DISTINTO A VACIO
    if ($data["password"] != "" && $data["confirm_password"] != "" && $data["password"] != $data["confirm_password"]) {
      $errors["password"] = "Las contrasenias tienen que coincidir";
    }



    return $errors;

  }

   function validateLogin($data) {
    $errors = [];

    if (!existsEmail($data["email"])){
        $errors["email"] = "los Datos son incorrectos";
    } else {
      $user = bringUserByEmail($data["email"]);

      if (!password_verify($data["password"], $user["password"])) {
        $errors["password"] = "La contraseña es invalida"; 
      } else {
        password_verify($user["password"], existPassword(
          $data["password"]));
      }
    }
    return $errors;
  }

  function existPassword($passFromDatabase) {

    $query = $db->prepare("SELECT * FROM myFuture_db.users WHERE password =:password");
    $query ->bindParam(':password', $passFromDatabase, PDO::PARAM_STR);

    $query ->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    return $user;
  }

  function existsEmail($email) {
    $user = bringUserByEmail($email);

    if ($user == null) {
      return false;
    } else {
      return true;
    }
  }

  function bringUserByEmail($email) {
    global $db;

    $query = $db->prepare("SELECT * FROM myFuture_db.users WHERE email =:email");
    $query ->bindParam(':email', $email, PDO::PARAM_STR);

    $query ->execute();

    $user = $query->fetch(PDO::FETCH_ASSOC);

    if ($user) {
      return $user;
    } else {
      return null;
    }
  }

  function login($email) {
    $loggedUser = bringUserByEmail($email);
    $_SESSION["loggedUser"] = $email;
  }

  function createUser($data) {
    echo ("<pre>");
    var_dump ($data);
    echo ("</pre>");
    return [
      "id" => proximoId(),
      "name" => ucfirst($data["name"]),
      "lastName" => ucfirst($data["last-name"]),
      "birthday" => $data["birthday"],
      "username" => $data["username"],
      "email" => $data["email"],
      //"avatar" => $data["avatar"],
      //"radioButton" => $data["radioButton"],
      "password" => password_hash($data["password"], PASSWORD_DEFAULT)


    ];
  }



  function proximoId() {
    global $db;

    return $db->lastInsertId() + 1;
  }

  function bringAllUsers() {
    global $db;
    $query = $db-> prepare('SELECT * FROM users');
    $query->execute();

    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    return $users;
  }

  function saveUser($user) {
    global $db;


    $query = $db->prepare('INSERT INTO myFuture_db.users (name, lastName, birthday, username, email, password)
    VALUES (:name, :lastName, :birthday, :username, :email, :password)');


    $query->bindParam(':name', $user['name'], PDO::PARAM_STR);
    $query->bindParam(':lastName', $user['lastName'], PDO::PARAM_STR);
    $query->bindParam(':birthday', $user['birthday'], PDO::PARAM_STR);
    $query->bindParam(':username', $user['username'], PDO::PARAM_STR);
    $query->bindParam(':email', $user['email'], PDO::PARAM_STR);
    // $query->bindParam(':avatar', $user['avatar'], PDO::PARAM_STR);
    // $query->bindParam(':radioButton', $user['radioButton'],PDO::PARAM_STR);
    $query->bindParam(':password', $user['password'], PDO::PARAM_STR);
    
    // $query->bindParam(':terms', $user['terms'], PDO::PARAM_STR);
    // $query->bindParam(':condition', $user['terms'], PDO::PARAM_STR);


    $query->execute();



  }

  function isLogged() {
    if (isset($_SESSION["loggedUser"])) {
      return true;
    } else {
      return false;
    }
  }

  function bringLoggedUser() {
  if (isLoggued()) {
    return bringUserByEmail($_SESSION["loggedUser"]);
  }

  return null;
}

function logout(){
  $_SESSION = [];

  header("location:index.php");exit;
}










?>
