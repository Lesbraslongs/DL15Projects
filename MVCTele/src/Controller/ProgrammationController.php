<?php

namespace Controller;

use Model\ProgrammationDTO;
use Model\ProgrammationDAO;
use View\View;

class ProgrammationController
{
    private $programmationDAO;

    public function __construct(){
        $this->programmationDAO = new ProgrammationDAO();
    }

    public function fetchAllAction(){
        $programmations = $this->programmationDAO->getAllProgrammations();//Model
        $vue = new View();
        echo  $vue->generer(array(
                                  array(
                                        "dir"=>"programmation",
                                        "file"=>"programmation", 
                                        "nameValue"=>"programmations", 
                                        "datas"=>$programmations
                                        )
                                 )
                            );

    }

    public function detailAction(){

        if(isset($_GET['id'])){

            $programmation = $this->programmationDAO->getOneProgrammation(intval($_GET['id']));
            $vue = new View();
            echo  $vue->generer(array(
                                  array(
                                        "dir"=>"programmation",
                                        "file"=>"programmationOne",
                                        "nameValue"=>"programmation", 
                                        "datas"=>$programmation
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
            $this->programmationDAO->deleteprogrammation(intval($_GET['id']));
        }
            $this->fetchAllAction();
    }

    public function addOrModifyAction(){
        $programmationDTO = new ProgrammationDTO();
        $programmationDTO->setNomProgrammation(htmlspecialchars($_POST['nom']));
        $programmationDTO->setDate(htmlspecialchars($_POST['date']));
        $programmationDTO->setHeure(htmlspecialchars($_POST['heure']));
        $programmationDTO->setId(htmlspecialchars($_GET['id']));

        $this->programmationDAO->addOrModify($programmationDTO);
        $this->fetchAllAction();
    }
 

}














