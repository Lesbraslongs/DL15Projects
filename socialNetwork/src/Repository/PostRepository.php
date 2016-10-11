<?php
namespace Repository;

use Doctrine\ORM\EntityRepository;

class PostRepository extends EntityRepository {

    public function searchPost($key) {
        /*$result = $em->getRepository("Repository\PostRepository");
        $result->createQueryBuilder('p')->where('p.subject LIKE :sujet')->setParameter('sujet', $_GET['search-word']);
        return $post->getQuery()->getResult();*/
        $result = $this->createQueryBuilder('p')->where('p.subject LIKE :sujet')->setParameter('sujet', '%'.$key.'%')->getQuery()->getResult();
        return $result;
    }
}