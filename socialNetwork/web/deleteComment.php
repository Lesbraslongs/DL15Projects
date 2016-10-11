<?php
namespace Entity;
require '../bootstrap.php';
use Entity\Post;
use Entity\Comment;

$comment = $em->getRepository('Entity\Comment')->find($_GET['id']);
$post = $em->getRepository('Entity\Post')->find($_GET['id']);

if(isset($_POST)){
    //$comment->setMessage($_POST['message']);
    
    $em->remove($comment);
    $em->flush($comment);
    unset($_POST);
    
}
header('Location: comment.php?id='.$comment->getPost()->getId().'');;


?>