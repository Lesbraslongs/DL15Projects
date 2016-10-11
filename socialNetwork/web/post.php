<?php
namespace Entity;

require_once("../bootstrap.php");
use Entity\Post;
use Entity\PostLike;

// $em instanceof EntityManager
$post = $em->getRepository('Entity\Post')->findBy(array(),array('date' => 'DESC'));
//var_dump($post);die();

if (isset($_POST['title']) && isset($_POST['message'])){
    if(!empty($_POST['title']) && !empty($_POST['message'])){
        $posts = new Post();
        $posts->setSubject($_POST['title']);
        $posts->setMessage($_POST['message']);
        $posts->setDate(new \DateTime);
        $posts->setAuteur($currentUser);
        
        $em->persist($posts);
        $em->flush($posts);
    }
    header('Location: post.php');
}

if (isset($_GET['like'])){
    $postlikes = new PostLike();
    $postlikes->setPost($post);
    $postlikes->setUser($currentUser);
    $postlikes->setScore($score);
    
    $em->persist($postlikes);
    $em->flush($postlikes);
}


if(isset($_GET['search-word'])){
    /*$post = $em->createQueryBuilder();
    $post->select('p')->from('post', 'p')->where('p.subject LIKE :sujet')->setParameter('sujet', $_GET['search-word']);
    return $post->getQuery()->getResult(); // retourne le résultat*/
    
    /*$query = $em->createQuery("SELECT p FROM Entity\Post p WHERE p.subject LIKE :sujet")->setParameter('sujet', '%'.$_GET['search-word'].'%');
    $post = $query->getResult();*/
    $post = $em->getRepository('Entity\Post')->searchPost($_GET['search-word']);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>IMIEBook</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
                <!-- main right col -->
                <div class="column col-sm-12 col-xs-12" id="main">

                    <!-- top nav -->
                    <div class="navbar navbar-blue navbar-static-top">
                        <div class="navbar-header">
                            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="/" class="navbar-brand logo">b</a>
                        </div>
                        <nav class="collapse navbar-collapse" role="navigation">
                            <form class="navbar-form navbar-left" action="post.php">
                                <div class="input-group input-group-sm" style="max-width:360px;">
                                    <input type="text" class="form-control" placeholder="Search" name="search-word" id="srch-term">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" name="search" type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a class="pull-right"><?= 'Bonjour '. $_SESSION['user']->getFirstName()?></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /top nav -->

                    <div class="padding">
                        <div class="full col-sm-9">

                            <!-- content -->
                            <div class="row">

                                <!-- main col left -->
                                <div class="col-sm-5">
                                    <div class="well">
                                        <form class="form-horizontal" role="form" method="post">
                                            <h4>What's New</h4>
                                            <div class="form-group" style="padding:14px;">
                                                <input type="text" class="form-control" name="title" placeholder="Titre"/>
                                                <hr/>
                                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                            </div>
                                            <button class="btn btn-primary pull-right" name="post" type="submit">Post</button>
                                            <ul class="list-inline">
                                                <li><a href=""><i class="glyphicon glyphicon-upload"></i></a></li>
                                                <li><a href=""><i class="glyphicon glyphicon-camera"></i></a></li>
                                                <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>

                                <!-- main col right -->
                                <div class="col-sm-7">
                                    <?php foreach ($post as $postt):?> 
                                <div class="col-sm-push-2 col-sm-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a href="deletePost.php?id=<?= $postt->getId() ?>" class="pull-right">Supprimer</a>
                                            <a href="comment.php?id=<?= $postt->getId() ?>" class="pull-right">Commenter</a>
                                            <a href="edit_post.php?id=<?= $postt->getId() ?>" class="pull-right">Editer</a>
                                            <h4><?= $postt->getSubject() ?></h4>
                                            <?= $postt->getDate()->format("d-m-Y H:i:s") ?>
                                        </div>
                                        <div class="panel-body">
                                            <?= $postt->getMessage()?>
                                        </div>
                                        <div class="panel-footer">
                                            <a href="post.php?like=1&id=" title="like">Like</a>
                                            <a href="" name="dislike">Dislike</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                </div>
                            </div><!--/row-->
                            <hr>
                        </div><!-- /col-9 -->
                    </div><!-- /padding -->
                </div>
                <!-- /main -->

            </div>
        </div>
    </div>
    <!-- script references -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
