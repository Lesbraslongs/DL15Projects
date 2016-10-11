<?php

namespace Controller;

use Model\TypeDTO;
use Model\TypeDAO;
use View\View;

class TypeController
{
    private $typeDAO;

    public function __construct(){
        $this->typeDAO = new TypeDAO();
    }

    public function fetchAllAction(){
        $types = $this->typeDAO->getAllTypes();//Model
        $vue = new View();
        echo  $vue->generer(array(
                                  array("dir"=>"type",
                                      "file"=>"type", 
                                      "nameValue"=>"types", 
                                      "datas"=>$types)
                                     )
                                );

    }

    public function detailAction(){

        if(isset($_GET['id'])){

            $type = $this->typeDAO->getOneType(intval($_GET['id']));
            $vue = new View();
            echo  $vue->generer(array(
                                  array("dir"=>"type",
                                      "file"=>"typeOne", 
                                      "nameValue"=>"type", 
                                      "datas"=>$type)
                                     )
                                );

        }
        else{

            $this->fetchAllAction();
        }
    }

    public function deleteAction(){
        if(isset($_GET['id'])){
            $this->typeDAO->deleteType(intval($_GET['id']));
        }
            $this->fetchAllAction();
    }

    public function addOrModifyAction(){
        $typeDTO = new TypeDTO();
        $typeDTO->setLibelle(htmlspecialchars($_POST['libelle']));
        $typeDTO->setId(htmlspecialchars($_GET['id']));

        $this->typeDAO->addOrModify($typeDTO);
        $this->fetchAllAction();
    }
 

}














