<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;
class ProgrammeDTO
{
    /**********************************Les Variables***************************************/
    private $id;
    private $idReal;
    private $nomProgramme;
    private $duree;
    private $nbProg;

    /**********************************Getter et Setter****************************/

    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    function getIdReal() {
        return $this->idReal;
    }

    function setIdReal($idReal) {
        $this->idReal = $idReal;
    }

    public function setNomProgramme($nomProgramme)
    {
        $this->nomProgramme = $nomProgramme;
    }

    public function getNomProgramme()
    {
        return $this->nomProgramme;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    public function getDuree()
    {
        return $this->duree;
    }
    
    function getNbProg() {
        return $this->nbProg;
    }

    function setNbProg($nbProg) {
        $this->nbProg = $nbProg;
    }





    

}
