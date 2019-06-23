<?php


  function validarRegistracion($datos) {
    $errores = [];

//NAME
    if ($datos["name"] == "") {
      $errores["name"] = "Tienes que llegar el nombre";
    }
    if (strlen($datos["name"]) < 6) {
      $errores["name"] = "Tienes que poner almenos 6 caracteres";
    }


//USER
    if ($datos["user"] == "") {
      $errores["user"] = "Tienes que llenar el user";
    }
    if (strlen($datos["user"]) < 5) {
      $errores["user"] = "Tienes que ingresar al menos 5 caracteres";
    }


//EMAIL
    if ($datos["email"] == "") {
      $errores["email"] = "Tienes que llenar el mail";
    } else if (filter_var($datos["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errores["email"] = "Tiene que ser un mail valido";
    } //ELSE IF PARA EXISTE MAIL FUNCTION


//PASS

    if ($datos["password"] == "") {
      $errores["password"] = "Tienes que llenar la password";
    }
//REPASS
    if ($datos["rePass"] == "") {
      $errores["rePass"] = "Tienes que llenar la confirmacion de la password";
    }
//COINCIDAN LAS 2 Y DISTINTO A VACIO
    if ($datos["password"] != "" && $datos["rePass"] != "" && $datos["password"] != $datos["rePass"]) {
      $errores["password"] = "Las contrasenias tienen que coincidir";
    }


    return $errores;

  }

  function existeElMail($email) {
    $usuario = buscarUsuarioPorEmail($email);

    if ($usuario == null) {
      return false;
    } else {
      return true;
    }
  }

  function buscarUsuarioPorEmail($email) {
    $usuarios = traerTodosLosUsuarios();

    foreach ($usuarios as $usuario) {
      if ($usuario["email"] == $email) {
        return $usuario;
      }
    }

    return null;
  }


  function armarUsuario($datos) {
    return [
      "id" => proximoId(),
      "name" => ucfirst($datos["name"]),
      "user" => $datos["user"],
      "email" => $datos["email"],
      "password" => password_hash($datos["password"], PASSWORD_DEFAULT)

    ];
  }

  function registrar($usuario) {
    $usuarios = traerTodosLosUsuarios();

    $usuarios[] = $usuario;

    $usuariosJson = json_encode($usuarios);

    file_put_contents("php/usuarios.json", $usuariosJson);
  }


  function proximoId() {
    $usuarios = traerTodosLosUsuarios();

    if (empty($usuarios)) {
      return 1;
    }


    $ultimoUsuario = end($usuarios);

    return $ultimoUsuario["id"] + 1;
  }

  function traerTodosLosUsuarios() {
    $archivo = file_get_contents("php/usuarios.json");

    if ($archivo == "") {
      return [];
    }

    $usuarios = json_decode($archivo, true);

    return $usuarios;
  }







?>
