<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;
class ProgrammationDTO
{
    /**********************************Les Variables***************************************/
    private $id;
    private $nomProgrammation;
    private $date;
    private $heure;

    /**********************************Getter et Setter****************************/

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setNomProgrammation($nomProgrammation)
    {
        $this->nomProgrammation = $nomProgrammation;
    }

    public function getNomProgrammation()
    {
        return $this->nomProgrammation;
    }
    
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    public function getHeure()
    {
        return $this->heure;
    }

    

}
