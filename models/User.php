<?php


class User
{


private $id;
private $name;
private $last_name;
private $birthday;
private $email;
private $password;
private $avatar;
private $genreSex;


public function __construct($name, $last_name, $email)
{

$this->name = $name;
$this->last_name = $last_name;
$this->email = $email;


}

public function setName($name)
{
  $this->name = $name;
}

public function getName()
{

  return $this->name;
}

public function setLastname($last_name)
{
  $this->last_name = $last_name;
}

public function getLastname()
{

  return $this->last_name;
}

public function setEmail($email)
{
  $this->email = $email;
}

public function getEmail()
{

  return $this->email;
}



}
