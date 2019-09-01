<?php

require_once ("db.php");

function addPost($post) {
  global $db;

  $query = $db->prepare('INSERT INTO myFuture_db.posts (image, footerText)
  VALUES (:image, :footerText)');

  $query->bindParam(':image', $_FILES['imageFilePost']["name"], PDO::PARAM_STR);
  $query->bindParam(':footerText', $post['footerTextAreaPost'], PDO::PARAM_STR);
  // $query->bindParam(':postOptions_id', $user['postOptions_id'], PDO::PARAM_STR);
  // $query->bindParam(':user_id', $user['user_id'], PDO::PARAM_STR);
  // $query->bindParam(':upload_at', $user['upload_at'], PDO::PARAM_STR);

  $query->execute();
}


function bringPostByUserId () {

global $db;

$query = $db->prepare("SELECT * FROM myFuture_db.posts
                      LEFT JOIN myFuture_db.users ON posts.id = users.post_id");
$query->execute();



$posts = $query->fetch(PDO::FETCH_ASSOC);


$postObject = [];

foreach ($posts as $post) {
    $finalPost = new Post($post['image'], $post['footerText']);

    $finalPost->setId($post["id"]);
    $finalPost->setCommentId($post["comment_id"]);
    $finalPost->setPostOptionsId($post["postOptions_id"]);
    $finalPost->setUserId($post["user_id"]);
    

    $postObject[] = $finalPost;

}


return $postObject;


}

function bringAllPosts() {
  global $db;
  $query = $db-> prepare('SELECT * FROM myFuture_db.posts');
  $query->execute();

  $users = $query->fetchAll(PDO::FETCH_ASSOC);

  return $users;
}

function createPost($data) {
  // echo ("<pre>");
  // var_dump ($data);
  // var_dump ($_FILES);
  // echo ("</pre>");
  return [
    "id" => nextId(),
    "image" => $_FILES["imageFilePost"]["name"],
    "footerTextAreaPost" => $data["footerTextAreaPost"]
  ];
}


function nextId() {
  global $db;

  return $db->lastInsertId() + 1;
}


function deletePostById($id) {
  global $db;
  $query = $db-> prepare('DELETE FROM myFuture_db.posts WHERE id =:id ');
  $query ->bindParam(':id', $id, PDO::PARAM_STR);
  $query->execute(); 
}


function savePathPostImage($file, $path = '') {
  $oldPath = $file["tmp_name"];
  $oldName = $file["name"];
  $extension = pathinfo($oldName, PATHINFO_EXTENSION);

  $newName = uniqid('myfuture-img-post-') . "." . $extension;
  $newPath = IMAGE_POST_DIR . $newName;

  move_uploaded_file($oldPath, $newPath);

  return $newName;
}

?>