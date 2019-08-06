
<?php
$dsn = 'mysql:host=127.0.0.1;dbname=;port=3306';
$db_user = 'root';
$db_pass = '';
$opt = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ];


try {

  $db = new PDO($dsn, $db_user, $db_pass, $opt);

}

catch (PDOException $Exception) {
  echo "No se pudo establecer la conexión a la base de datos. ";
  echo $Exception->getMessage();

}


