<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Erwan
 * Date: 05/12/14
 * Time: 16:21
 * To change this template use File | Settings | File Templates.
 */

namespace  Controller;

class Router
{
    private $defaultController;
    private $chaineController;
    private $realisateurController;
    private $typeController;
   


    public function __construct(){
        $this->defaultController = new DefaultController();
        $this->chaineController = new ChaineController();
        $this->realisateurController = new realisateurController();
        $this->typeController = new typeController();
    }

    public function routeRequest(){
        if ($this->isController('chaine')){ 

            if ($this->isAction('fetchAll')){
                $this->chaineController->fetchAllAction();
            }
            if($this->isAction('del')){
                $this->chaineController->deleteAction();
            }
            if($this->isAction('add')){
                $this->chaineController->addOrModifyAction();
            }
            if($this->isAction('modify')){
                $this->chaineController->addOrModifyAction();
            }
            if($this->isAction('detail')){
                $this->chaineController->detailAction();
            }
        } elseif ($this->isController('realisateur')){ 

            if ($this->isAction('fetchAll')){
                $this->realisateurController->fetchAllAction();
            }
            if($this->isAction('del')){
                $this->realisateurController->deleteAction();
            }
            if($this->isAction('add')){
                $this->realisateurController->addOrModifyAction();
            }
            if($this->isAction('modify')){
                $this->realisateurController->addOrModifyAction();
            }
            if($this->isAction('detail')){
                $this->realisateurController->detailAction();
            }
        }elseif ($this->isController('type')){ 

            if ($this->isAction('fetchAll')){
                $this->typeController->fetchAllAction();
            }
            if($this->isAction('del')){
                $this->typeController->deleteAction();
            }
            if($this->isAction('add')){
                $this->typeController->addOrModifyAction();
            }
            if($this->isAction('modify')){
                $this->typeController->addOrModifyAction();
            }
            if($this->isAction('detail')){
                $this->typeController->detailAction();
            }
        }
        
        else{
            $this->defaultController->indexAction();
        }
    }

    public function isController($ctrl){
        return (isset($_GET['ctrl']) && $_GET['ctrl'] === $ctrl ? true : false);
    }

    public function isAction($act){
        return (isset($_GET['action']) && $_GET['action'] === $act ? true : false);
    }

}












