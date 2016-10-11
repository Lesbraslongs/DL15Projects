<?php

require_once ("src/Model/HerosDTO.php");
require_once ("src/Model/HerosDAO.php");

class HerosController {
    private $herosDAO;
    
    public function __construct() {
        $this->herosDAO = new HerosDAO();
    }
    
    function routeur(){        
            if(isset($_GET["id"]) && !empty($_GET["id"])){
                
                if (($_GET["id"]) != -1) {
                    
                    $this->fetchOneAction();
                }else {
                    $this->addAction();
                }
           }else {
               $this->fetchAllAction();
            }
    }


    public function fetchAllAction() {
        
        $heros = $this->herosDAO->getAllHeros();
        include ("src/View/heros/herosView.php");
    }
    
    public function fetchOneAction(){

        if(isset($_GET['id'])){

            $heros = $this->herosDAO->getOneHeros(intval($_GET['id']));
            include ("src/View/heros/herosOneView.php");
        }
        else{
            $this->fetchAllAction();
        }
        return $heros;
    }
    
    public function addAction(){
        $herosDTO = new HerosDTO();
        $herosDTO->setNom(htmlspecialchars($_POST['nom']));
        $herosDTO->setPouvoir(htmlspecialchars($_POST['pouvoir']));
        $herosDTO->setTypePerso(htmlspecialchars($_POST['typePerso']));
        $herosDTO->setId(htmlspecialchars($_GET['id']));

        $this->herosDAO->addHeros($herosDTO);
        $this->fetchAllAction();
    }
    
    function combatAction(){
        
    }

}
