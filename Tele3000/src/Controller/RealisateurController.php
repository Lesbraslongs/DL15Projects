<?php

namespace Controller;

use Model\RealisateurDTO;
use Model\RealisateurDAO;
use View\View;

class RealisateurController
{
    private $realisateurDAO;

    public function __construct(){
        $this->realisateurDAO = new RealisateurDAO();
    }

    public function fetchAllAction(){
        $realisateurs = $this->realisateurDAO->getAllRealisateurs();//Model
        $vue = new View();
        echo  $vue->generer(array(
                                  array("dir"=>"realisateur",
                                      "file"=>"realisateur", 
                                      "nameValue"=>"realisateurs", 
                                      "datas"=>$realisateurs)
                                     )
                                );

    }

    public function detailAction(){

        if(isset($_GET['id'])){

            $realisateur = $this->realisateurDAO->getOneRealisateur(intval($_GET['id']));
            $vue = new View();
            echo  $vue->generer(array(
                                  array("dir"=>"realisateur",
                                      "file"=>"realisateurOne", 
                                      "nameValue"=>"realisateur", 
                                      "datas"=>$realisateur)
                                     )
                                );

        }
        else{

            $this->fetchAllAction();
        }
    }

    public function deleteAction(){
        if(isset($_GET['id'])){
            $this->realisateurDAO->deleteRealisateur(intval($_GET['id']));
        }
            $this->fetchAllAction();
    }

    public function addOrModifyAction(){
        $realisateurDTO = new RealisateurDTO();
        $realisateurDTO->setNomRealisateur(htmlspecialchars($_POST['nom']));
        $realisateurDTO->setId(htmlspecialchars($_GET['id']));

        $this->realisateurDAO->addOrModify($realisateurDTO);
        $this->fetchAllAction();
    }
 

}














