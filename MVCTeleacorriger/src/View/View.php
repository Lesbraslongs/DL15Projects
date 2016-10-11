<?php

namespace View;
class View
{
    private $fichier =  array();

    public function  __construct(){
      
    }

    /**fonction de construction et d'affichage des vues
     *
     * @param $donnees
     */
    public function generer($donnees){
      $contenu="";
      foreach($donnees as $value){
          $fichier = "src/View/".$value['dir']."/".$value['file']."View.php";
          
          $contenu .= $this->genererFichier($fichier, array($value['nameValue']=>$value['datas']));
      }

      $vue = $this->genererFichier('src/View/layout/layout.php',array('content'=>$contenu));
 
      return $vue;

    }

    public function genererFichier($fichier, $donnees){;
     
       if(file_exists($fichier)){
           if (isset($donnees)){
              extract($donnees);
                 
              /* EXTRACT : attend un tableau associatif. Cette fonction crée les variables dont les noms sont les index de ce tableau, et leur affecte la valeur associée.*/ 
               ob_start();
               require $fichier;

               return ob_get_clean();

           }
       }
        else{
            throw new \Exception("le fichier ".$fichier." est introuvable");
        }
    }
}













