<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;
class TypeDTO
{
    /**********************************Les Variables***************************************/
    private $id;
    private $libelle;

    /**********************************Getter et Setter****************************/

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }

    

}
