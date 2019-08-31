<?php


class Comment
{


private $id;
private $id_post;
private $id_user;



public function __construct($id_post, $id_user)
{

$this->id_post = $id_post;
$this->id_user = $id_user;



}

public function setIdPost($id_post)
{
  $this->id_post = $id_post;
}

public function getIdPost()
{

  return $this->id_post;
}

public function setIdUser($id_user)
{
  $this->id_user = $id_user;
}

public function getIdUser()
{

  return $this->id_user;
}





}
