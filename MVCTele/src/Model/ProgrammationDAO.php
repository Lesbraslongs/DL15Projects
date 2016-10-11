<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;

class ProgrammationDAO extends Model
{

    public function getAllProgrammations(){
        $sql = 'SELECT programmation_id, nom_chaine, date_diffusion, heure FROM programmation INNER JOIN chaine ON chaine.chaine_id = programmation.chaine_id';

        $programmations = array();
        $result=$this->executeRequest($sql);

        while($retourProgrammation = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new ProgrammationDTO();
            $c->setId($retourProgrammation->programmation_id);
            $c->setNomProgrammation($retourProgrammation->nom_chaine);
            $c->setDate($retourProgrammation->date_diffusion);
            $c->setHeure($retourProgrammation->heure);
            $programmations[]=$c;
        }
        return $programmations;
    }

    /**
     * Fonction de recherche d'une programmation
     * @param $id
     * @return ProgrammationDTO
     */
    public function  getOneProgrammation($id){
        $sql = 'SELECT programmation_id, nom_chaine, date_diffusion, heure '
                . 'FROM programmation '
                . 'INNER JOIN chaine '
                . 'ON chaine.chaine_id = programmation.chaine_id'
                . 'WHERE chaine_id = ?';

        $result = $this->executeRequest($sql, array($id));
        while($retourProgrammation = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new ProgrammationDTO();
            $c->setId($retourProgrammation->programmation_id);
            $c->setNomProgrammation($retourProgrammation->nom_chaine);
            $c->setDate($retourProgrammation->date_diffusion);
            $c->setHeure($retourProgrammation->heure);
            $theOne = $c;
        }
        return $theOne;
    }

    public function deleteProgrammation($id){
        $sql = 'DELETE FROM programmations WHERE programmation_id = ?';
        $this->executeRequest($sql, array($id));
    }

    public function addOrModify($programmation){
        $param = array(
            $programmation->getNomProgrammation(),
            $programmation->getDuree()
        );

        if ($programmation->getId()>0){
            $sql = 'UPDATE programmations SET nom_chaine=?, date_diffusion=?, heure=?
                WHERE programmation_id = ?;';
            $param[] = $programmation->getId();

            $this->executeRequest($sql,$param);
        }
        else{
            $sql = 'INSERT INTO programmations (nom_chaine, date_diffusion, heure) VALUES  (?,?,?);';

            $this->executeRequest($sql,$param);
        }
    }

}
