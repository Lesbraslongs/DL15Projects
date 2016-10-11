<?php

namespace Controller;
use Model\ProgrammeDuJourDTO;
use Model\ProgrammeDuJourDAO;
use View\View;
class DefaultController {
     
    // Load welcome page
   

  public function indexAction(){
     $maView = new View();   
        
     echo  $maView->generer(array(
                                  array("dir"=>"default",
                                      "file"=>"default", 
                                      "nameValue"=>"", 
                                      "datas"=>"")
                                  )
                            );
      
   
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
