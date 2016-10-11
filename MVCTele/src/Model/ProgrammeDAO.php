<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 08/12/14
 * Time: 10:00
 * To change this template use File | Settings | File Templates.
 */
namespace Model;

class ProgrammeDAO extends Model
{
    private $herosDTO;
    
    function __construct($herosDTO) {
        $this->herosDTO = $herosDTO;
    }
    public function getAllProgrammes(){
        $sql = 'SELECT programme_id, nom_realisateur, nom_programme, duree '
                . 'FROM programmes p INNER JOIN realisateur r '
                . 'ON p.realisateur_id = r.realisateur_id;';

        $programmes = array();
        $result=$this->executeRequest($sql);

        while($retourProgramme = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new ProgrammeDTO();
            $c->setId($retourProgramme->programme_id);
            $c->setIdReal($retourProgramme->nom_realisateur);
            $c->setNomProgramme($retourProgramme->nom_programme);
            $c->setDuree($retourProgramme->duree);
            $programmes[]=$c;
        }
        return $programmes;
    }
    
    function getDureeMoy(){
        $sql = "SELECT avg(duree) as moyenne "
                . "FROM programmes p INNER JOIN type_diffusion tp "
                . "ON p.type_id = tp.type_id "
                . "WHERE p.type_id = 3";
        
        $result=$this->executeRequest($sql);
        $moy = $result->fetch();

        return $moy;
    }

    
    public function getNbProg(){
        $sql = 'SELECT COUNT(programme_id) as somme FROM programmes;';
        $result=$this->executeRequest($sql);
        $count = $result->fetch();

        return $count;
    }
    
    public function getNbProgParChaine(){        
        $sql = "SELECT DISTINCT COUNT(p.programme_id) as total, pg.date_diffusion, c.nom_chaine "
                . "FROM programmes p INNER JOIN programmation pg "
                . "ON p.programme_id=pg.programme_id "
                . "INNER JOIN chaine c ON pg.chaine_id=c.chaine_id "
                . "GROUP BY c.nom_chaine";
        
        $chaines = array();
        $result=$this->executeRequest($sql);
        //$chaines=$result->fetch(\PDO::FETCH_OBJ);

        while($retourProgramme = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new ProgrammeDTO();
            $c->setNbProg($retourProgramme->total);
            $c->setDuree($retourProgramme->date_diffusion);
            $c->setNomProgramme($retourProgramme->nom_chaine);
            $chaines[]=$c;
        }
        return $chaines;
    }
    
    public function getProgrammesType($id){
        $sql = 'SELECT programme_id, nom_programme, duree '
                . 'FROM programmes p INNER JOIN type_diffusion t '
                . 'ON p.type_id = t.type_id '
                . 'WHERE p.type_id = ?;';

        $programmes = array();
        $result=$this->executeRequest($sql, array($id));

        while($retourProgramme = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new ProgrammeDTO();
            $c->setId($retourProgramme->programme_id);
            $c->setNomProgramme($retourProgramme->nom_programme);
            $c->setDuree($retourProgramme->duree);
            $programmes[]=$c;
        }
        return $programmes;
    }

    /**
     * Fonction de recherche d'un programme
     * @param $id
     * @return ProgrammeDTO
     */
    public function  getOneProgramme($id){
        $sql = 'SELECT programme_id, nom_programme, duree
                FROM programmes
                WHERE programme_id = ?;';

        $result = $this->executeRequest($sql, array($id));
        while($retourProgramme = $result->fetch(\PDO::FETCH_OBJ)){
            $c = new ProgrammeDTO();
            $c->setId($retourProgramme->programme_id);
            $c->setNomProgramme($retourProgramme->nom_programme);
            $c->setDuree($retourProgramme->duree);
            $theOne = $c;
        }
        return $theOne;
    }

    public function deleteProgramme($id){
        $sql = 'DELETE FROM programmes WHERE programme_id = ?';
        $this->executeRequest($sql, array($id));
    }

    public function addOrModify($programme){
        $param = array(
            $programme->getNomProgramme(),
            $programme->getDuree()
        );

        if ($programme->getId()>0){
            $sql = 'UPDATE programmes SET nom_programme=?, duree=?
                WHERE programme_id = ?;';
            $param[] = $programme->getId();

            $this->executeRequest($sql,$param);
        }
        else{
            $sql = 'INSERT INTO programmes (nom_programme, duree) VALUES  (?,?);';

            $this->executeRequest($sql,$param);
        }
    }

}
