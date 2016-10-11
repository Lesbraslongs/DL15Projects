<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;

class RealisateurDAO extends Model
{

    public function getAllRealisateurs(){
        $sql = 'SELECT realisateur_id, nom_realisateur FROM realisateur;';

        $realisateurs = array();
        $result=$this->executeRequest($sql);

        while($retourRealisateur = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new RealisateurDTO();
            $c->setId($retourRealisateur->realisateur_id);
            $c->setNomRealisateur($retourRealisateur->nom_realisateur);
            $realisateurs[]=$c;
        }
        return $realisateurs;
    }

    /**
     * Fonction de recherche d'une realisateur
     * @param $id
     * @return RealisateurDTO
     */
    public function  getOneRealisateur($id){
        $sql = 'SELECT realisateur_id, nom_realisateur
                FROM realisateur
                WHERE realisateur_id = ?;';

        $result = $this->executeRequest($sql, array($id));
        while($realisateur = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new RealisateurDTO();
            $c->setId($realisateur->realisateur_id);
            $c->setNomRealisateur($realisateur->nom_realisateur);
            $theOne = $c;
        }
        return $theOne;
    }

    public function deleteRealisateur($id){
        $sql = 'DELETE FROM realisateur WHERE realisateur_id = ?';
        $this->executeRequest($sql, array($id));
    }

    public function addOrModify($realisateur){
        $param = array(
            $realisateur->getNomRealisateur(),
        );

        if ($realisateur->getId()>0){
            $sql = 'UPDATE realisateur SET nom_realisateur=?
                WHERE realisateur_id = ?;';
            $param[] = $realisateur->getId();

            $this->executeRequest($sql,$param);
        }
        else{
            $sql = 'INSERT INTO realisateur( nom_realisateur )VALUES  (?);';

            $this->executeRequest($sql,$param);
        }
    }

}
