<?php

namespace Controller;

use Model\ProgrammeDTO;
use Model\ProgrammeDAO;
use View\View;

class ProgrammeController
{
    private $programmeDAO;

    public function __construct(){
        $this->programmeDAO = new ProgrammeDAO();
    }

    public function fetchAllAction(){
        $programmes = $this->programmeDAO->getAllProgrammes();//Model
        $vue = new View();
        $vue1 = new View();
        $count = $this->programmeDAO->getNbProg();
        $programmes[]=$count;
        //var_dump($count);
        $chaines = $this->programmeDAO->getNbProgParChaine();
        //var_dump($chaines);
        
        echo  $vue->generer(array(
                                    array(
                                      "dir"=>"programme",
                                      "file"=>"nbProg", 
                                      "nameValue"=>"chaines", 
                                      "datas"=>$chaines
                                      ),
                                  array(
                                        "dir"=>"programme",
                                        "file"=>"programme", 
                                        "nameValue"=>"programmes", 
                                        "datas"=>$programmes
                                        )
                                 )
                            );
        /*echo  $vue1->generer(array(
                                array(
                                      "dir"=>"programme",
                                      "file"=>"nbProg", 
                                      "nameValue"=>"chaines", 
                                      "datas"=>$chaines
                                      )
                                )
                            );*/
        
    }
    
    public function typeAction(){
        $programmes = $this->programmeDAO->getProgrammesType(intval($_GET['id']));//Model
        $vue = new View();
        $dureeMoy = $this->programmeDAO->getDureeMoy();
        $programmes[] = $dureeMoy;
        //var_dump($dureeMoy);
        echo  $vue->generer(array(
                                  array(
                                        "dir"=>"programme",
                                        "file"=>"programme", 
                                        "nameValue"=>"programmes", 
                                        "datas"=>$programmes
                                        )
                                 )
                            );

    }

    public function detailAction(){

        if(isset($_GET['id'])){

            $programme = $this->programmeDAO->getOneProgramme(intval($_GET['id']));
            $vue = new View();
            echo  $vue->generer(array(
                                  array(
                                        "dir"=>"programme",
                                        "file"=>"programmeOne",
                                        "nameValue"=>"programme", 
                                        "datas"=>$programme
                                        )
                                     )
                                );

        }
        else{

            $this->fetchAllAction();
        }
    }

    public function deleteAction(){
        if(isset($_GET['id'])){
            $this->programmeDAO->deleteprogramme(intval($_GET['id']));
        }
            $this->fetchAllAction();
    }

    public function addOrModifyAction(){
        $programmeDTO = new ProgrammeDTO();
        $programmeDTO->setNomProgramme(htmlspecialchars($_POST['nom']));
        $programmeDTO->setDuree(htmlspecialchars($_POST['duree']));
        $programmeDTO->setId(htmlspecialchars($_GET['id']));

        $this->programmeDAO->addOrModify($programmeDTO);
        $this->fetchAllAction();
    }
 

}














