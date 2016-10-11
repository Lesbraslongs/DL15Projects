<?php

class Model
{
    /** Objet PDO d'accès à la BD */
    protected $bdd;

    /**
     * Fonction de connexion à la base
     * @return \PDO  On retourne l'objet $bdd à la fonction de requêtes
     */
    function getBdd(){
        try{
            if ($this->bdd==null){
                $hote='127.0.0.1';
                $port='3306';
                $db= 'superheros';
                $user='root';
                $password='';

                $this->bdd = new PDO('mysql:host='.$hote.
                                     ';port='.$port.
                                     ';dbname='.$db,
                                     $user,
                                     $password,
                                     array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
                );
            }
        }
        catch(\Exception $e){
            echo 'Là il y a une erreur : '.$e->getTraceAsString();
        }
        return $this->bdd;
    }
}