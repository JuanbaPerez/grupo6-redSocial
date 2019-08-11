<?php

const IMAGE_DIR = __DIR__ . "/../data/img/";


/*
ESTO HAY QUE HACE PARA GUARDAR LA IMAGEN EN LA CARPETA

// Seguimos por la imagen.

      // Tomamos los datos originales de la imagen.
      $oldPath = $projectImage["tmp_name"];
      $oldName = $projectImage["name"];
      $extension = pathinfo($oldName, PATHINFO_EXTENSION);

      // Formamos el nuevo nombre y el nuevo path a donde quedará guardada.
      $newName = uniqid('project-img-') . "." . $extension;
      $newPath = IMAGE_DIR . $newName;

      // Guardamos la imagen en su path final y la agregamos al array de usuario.
      move_uploaded_file($oldPath, $newPath);
      $user['projectImage'] = $newName;
*/

?>

