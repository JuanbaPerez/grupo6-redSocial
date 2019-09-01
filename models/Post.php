<?php


class Post
{


private $id;
private $image;
private $footerText;
private $comment_id;
private $postOptions_id;
private $user_id;


public function __construct($image, $footerText)
{

$this->image = $image;
$this->footerText = $footerText;
}

public function setId($id) {
  $this->id = $id;
}

public function getId() {
  return $this->id;
}

  public function setPostOptionsId($postOptions_id)
  {
    $this->postOptions_id = $postOptions_id;
  }

  public function getPostOptionsId()
  {
    return $this->postOptions_id;
  }




public function setImage($image)
{
  $this->image = $image;
}

public function getImage()
{

  return $this->image;
}



public function setFooterText($footerText)
{
  $this->footerText = $footerText;
}

public function getFooterText()
{

  return $this->footerText;
}



public function setCommentId($comment_id)
{
  $this->comment_id = $comment_id;
}

public function getCommentId()
{

  return $this->comment_id;
}



public function setUserId($user_id)
{
  $this->user_id = $user_id;
}

public function getUserId()
{
  return $this->user_id;
}


}
