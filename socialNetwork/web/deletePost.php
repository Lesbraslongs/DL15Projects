<?php
namespace Entity;
require '../bootstrap.php';
use Entity\Post;

$post = $em->getRepository('Entity\Post')->find($_GET['id']);
//$query = $em->createQuery("UPDATE Entity\Post p WHERE p.id = :id")->setParameter('id', $_GET['id']);
  //  $post = $query->getResult();

if(isset($_POST)){
    $post->setSubject($_POST['subject']);
    $post->setMessage($_POST['message']);
    
    $em->remove($post);
    $em->flush($post);
    unset($_POST);
    
}
header('Location: post.php');


?>