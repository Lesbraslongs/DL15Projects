<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;

class TypeDAO extends Model
{

    public function getAllTypes(){
        $sql = 'SELECT type_id, libelle FROM type_diffusion;';

        $types = array();
        $result=$this->executeRequest($sql);

        while($retourType = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new TypeDTO();
            $c->setId($retourType->type_id);
            $c->setLibelle($retourType->libelle);
            $types[]=$c;
        }
        return $types;
    }

    /**
     * Fonction de recherche d'une type
     * @param $id
     * @return TypeDTO
     */
    public function  getOneType($id){
        $sql = 'SELECT type_id, libelle
                FROM type_diffusion
                WHERE type_id = ?;';

        $result = $this->executeRequest($sql, array($id));
        while($type = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new TypeDTO();
            $c->setId($type->type_id);
            $c->setLibelle($type->libelle);
            $theOne = $c;
        }
        return $theOne;
    }

    public function deleteType($id){
        $sql = 'DELETE FROM type_diffusion WHERE type_id = ?';
        $this->executeRequest($sql, array($id));
    }

    public function addOrModify($type){
        $param = array(
            $type->getLibelle(),
        );

        if ($type->getId()>0){
            $sql = 'UPDATE type_diffusion SET libelle = ?
                WHERE type_id = ?;';
            $param[] = $type->getId();

            $this->executeRequest($sql,$param);
        }
        else{
            $sql = 'INSERT INTO type_diffusion( libelle ) VALUES  (?);';

            $this->executeRequest($sql,$param);
        }
    }

}
