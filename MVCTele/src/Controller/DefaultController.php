<?php

namespace Controller;
use Model\TypeDTO;
use Model\TypeDAO;
use View\View;
class DefaultController {
     
    // Load welcome page
   

  public function indexAction(){
     $maView = new View();   
     $typesDiff = $this->typeProgrammeAction();   
     echo  $maView->generer(array(
                                  array("dir"=>"default",
                                      "file"=>"default", 
                                      "nameValue"=>"", 
                                      "datas"=>""
                                      ),
                                    array("dir"=>"type",
                                        "file"=>"liensType", 
                                        "nameValue"=>"types", 
                                        "datas"=> $typesDiff
                                    )
                                 )
                            );
  }
  
  public function typeProgrammeAction(){
      $typesDiff = new TypeDAO();
      $typesDiff = $typesDiff->getAllTypes();
      
      return $typesDiff;
  }
  
  protected function forbidden(){
    header('HTTP/1.0 404 Forbidden');
    die('Acces interdit');
 }

    protected function notFound(){
        header('HTTP/1.0 404 Not Found');
        die('Page introuvable');
    } 
}
