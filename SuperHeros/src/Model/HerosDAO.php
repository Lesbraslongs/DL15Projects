<?php

require_once "src/Model/Model.php";
require_once "src/Model/herosDTO.php";

class HerosDAO extends Model{
    
    public function getAllHeros(){
        $sql = 'SELECT id, nom, pouvoir,type_perso '
                . 'FROM superheros;';

        $heros = array();
        $result= $this->getBdd()->query($sql);

        while($retourHeros = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new HerosDTO();
            $c->setId($retourHeros->id);
            $c->setNom($retourHeros->nom);
            $c->setPouvoir($retourHeros->pouvoir);
            $c->setTypePerso($retourHeros->type_perso);
            $heros[]=$c;
        }
        return $heros;
    }
    
    public function  getOneHeros($id){
        
        $sql = 'SELECT nom, pouvoir, type_perso FROM superheros WHERE id = ?;';

        $result= $this->getBdd()->prepare($sql);
        $result->execute(array($id));

        while($retourHeros = $result->fetch(\PDO::FETCH_OBJ)){
                $c = new HerosDTO();
                $c->setId($retourHeros->id);
                $c->setNom($retourHeros->nom);
                $c->setPouvoir($retourHeros->pouvoir);
                $c->setTypePerso($retourHeros->type_perso);
                $unHeros= $c;
            }

        return $unHeros;
    }
    
    public function addHeros(HerosDTO $heros){
            
        $param = array($heros->getNom(), $heros->getPouvoir(), $heros->getTypePerso());

            $sql = 'INSERT INTO superheros (nom, pouvoir, type_perso) VALUES  (?,?,?);';

            $result= $this->getBdd()->prepare($sql);
            $result->execute($param);
    }
    
    function attaquer (HerosDTO $heros){
        $heros->vie -= $this->atk;
    }
    
    function regenerer ($vie = null) {
        if (is_null($vie)){
            $this->vie = 100;
        }else{
            $this->vie += $vie;
        }
    }
    
    function estMort (){
        return $this->vie <= 0;
    }

}

